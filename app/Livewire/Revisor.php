<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class Revisor extends Component
{

    public $announcement_to_check;
    public $elementToShow;


    public function render()
    {
        return view('livewire.revisor');
    }

    public function mount(){
        $this->announcement_to_check = Announcement::where('is_accepted', null)->first();
    }

    public function acceptAnnouncement(){

        $this->announcement_to_check->setAccepted(true);
        session()->flash('message','complimenti, hai accettato l\' annuncio');
        $this->announcement_to_check = Announcement::where('is_accepted', null)->first();
      /*   return redirect()->back(); */
    }


    public function rejectAnnouncement(){
        $this->announcement_to_check->setAccepted(false);
        session()->flash('message','complimenti, hai rifiutato l\' annuncio');
        $this->announcement_to_check = Announcement::where('is_accepted', null)->first();
       /*  return redirect()->back(); */
    }


}
