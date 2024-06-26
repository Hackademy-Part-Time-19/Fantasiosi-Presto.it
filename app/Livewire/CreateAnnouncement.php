<?php

namespace App\Livewire;


use App\Models\User;
use Livewire\Component;
use App\Models\Category;

use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use App\Jobs\InsertWatermark;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Jobs\GoogleVisonSafeSearch;
use App\Jobs\GoogleVisionLabelImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class CreateAnnouncement extends Component
{
    use WithFileUploads;
    protected $user_id;
    #[Validate('required')]
    public $category;
    #[Validate('required')]
    #[Validate('min:5')]
    public $title;
    #[Validate('required')]
    #[Validate('min:5')]
    public $body;
    #[Validate('required')]
    #[Validate('decimal:2')]
    public $price;

    public $temporary_images;
    public $images = [];


    protected $rules = [
        'temporary_images.*' => 'image|max:1024',
        'images.*' => 'image|max:1024',
    ];

    protected $messages = [
        'temporary_images.image' => 'Il file deve essere un immagine.',
        'temporary_images.max' => 'Il file non può superare i 1 mb.',
        'images.image' => 'Il file deve essere un immagine.',
        'images.max' => 'Il file non può superare i 1 mb.',
        'category' => 'Inserisci una categoria!',
        'title' => "Per favore inserisci il titolo dell' articolo",
        'body' => "Per favore inserisci il corpo dell' articolo",
        'price' => "Per favore inserisci il prezzo dell' articolo",
        'title.min' => "Il titolo deve essere piu' lungo",
        'body.min' => "Il corpo deve essere piu' lungo",
        'price.decimal' => "Inserisci un prezzo valido",
    ];



    public function render()
    {

        return view('livewire.create-announcement');
    }

    public function store()
    {
        $this->validate();
        $category = Category::find($this->category);




        $announcement = $category->announcements()->create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
            'user_id' => auth()->user()->id,
        ]);
        if (count($this->images)){
            foreach ($this->images as $image){
                $directory = 'announcements/'.$announcement->id;
                $newFileName = $directory;
                $newImage = $announcement->images()->create([
                        'path' => $image->store($newFileName, 'public'),
                    ]);

                    RemoveFaces::withChain([
                        new InsertWatermark($newImage->id),
                        new ResizeImage($newImage->path, 400, 300),
                        new GoogleVisonSafeSearch($newImage->id),
                        new GoogleVisionLabelImage($newImage->id)
                    ])->dispatch($newImage->id);
                   
            } 
            File::deleteDirectory(storage_path('app/livewire-tmp'));
        }
       

 $this->cleanForm();
        session()->flash('success', 'Annuncio caricato con successo');
    }
    public function updatedTemporaryImages()
    {
        if ($this->validate(['temporary_images.*' => 'image|max:1024'])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function updated($property){
        $this->validateOnly($property);

    }

    public function cleanForm(){
        $this->title = '';
        $this->body = '';
        $this->price = '';
        $this->temporary_images = [];
        $this->images = [];
        $this->category = '';
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }
}
