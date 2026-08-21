<?php

namespace App\Livewire\Public;

use App\Models\Message;
use Livewire\Component;

class Messages extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;


    public function render()
    {
        return view('livewire.public.messages');
    }


    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required',
        ]);

       $msg=new Message();
       $msg->name=$this->name;
       $msg->email=$this->email;
       $msg->phone=$this->phone;
       $msg->message=$this->message;
       $msg->save();

        session()->flash('message', 'Message sent successfully.');

        $this->reset();
    }
}
