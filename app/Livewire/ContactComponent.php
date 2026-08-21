<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;

class ContactComponent extends Component
{

    public $contact_list;
    public function render()
    {
        return view('livewire.contact-component');
    }
    public function mount()
    {
        $this->contact_list =Message::orderBy('id','DESC')->get();
    }

}
