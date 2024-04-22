<?php

namespace App\Livewire\Front\Components;

use App\Models\Message;
use Livewire\Component;

class MessagesComponent extends Component
{
    public $name, $email, $subject, $message ;
    public function rules(){
        return [
            'name' => ['required','string','min:1','max:200'],
            'email' => ['required','email'],
            'subject' => ['required', 'string', 'max:500'],
            'message' => ['required', 'string']
        ];
    }
    public function submit(){
        $data = $this->validate();
        Message::create($data);
        $this->reset(['name','email','subject','message']);
        session()->flash('message',__("Your message has been sent successfully"));
    }
    public function render()
    {
        return view('front.components.messages-component');
    }
}
