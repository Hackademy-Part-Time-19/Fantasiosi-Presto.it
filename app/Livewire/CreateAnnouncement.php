<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class CreateAnnouncement extends Component
{
    use WithFileUploads;
    protected $user_id;
    #[Validate('required', message: "Inserisci la categoria!")]
    public $category;
    #[Validate('required', message: "Per favore inserisci il titolo dell'articolo")]
    #[Validate('min:5', message: "Inserisci un titolo piu' lungo")]
    public $title;
    #[Validate('required', message: "Per favore inserisci il corpo dell'articolo")]
    #[Validate('min:5', message: "Inserisci un corpo piu' lungo")]
    public $body;
    #[Validate('required', message: "Per favore inserisci il prezzo dell'articolo")]
    #[Validate('decimal:2', message: "Inserisci un prezzo valido")]
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
    ];



    public function render()
    {
        $categories = Category::all();
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
               
                $announcement->images()->create([
                    'path' => $image->store($directory, 'public'),
                ]);
            }
        }
        File::deleteDirectory(storage_path('app/livewire-tmp'));

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
        $this->reset();
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }
}
