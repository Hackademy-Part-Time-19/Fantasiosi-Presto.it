<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Announcement;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;


class CreateAnnouncement extends Component
{
    protected $user_id;
    public $category;
    #[Validate('required')]
    public $title;
    #[Validate('required')]
    public $body;
    #[Validate('required')]
    public $price;



    public function render()
    {
        $categories = Category::all();
        return view('livewire.create-announcement');
    }

    public function store(User $user)
    {
        $category = Category::find($this->category);
        $category->announcements()->create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
            'user_id'=>auth()->user()->id,
        ]);





        /*$this->validate();



        $data = ['title' => $this->title, 'body' => $this->body, 'price' => $this->price, 'category_id' =>$this->category->id];
        Announcement::create($data); */

        session()->flash('success', 'Annuncio caricato con successo');
    }
}
