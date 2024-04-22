<?php

namespace App\Livewire\Front\Components;

use App\Models\Subscriber;
use Livewire\Component;

class SubscribersComponent extends Component
{
    public $email ;
    public function rules(){
        return [
            'email' => ['required','email','unique:subscribers,email'],
        ];
    }
    public function submit(){
        $this->validate();
        Subscriber::create(['email' => $this->email]);
        $this->reset(['email']);
        session()->flash('subscriber', 'Subscriber successfully .');
    }
    public function render()
    {
        return view('front.components.subscribers-component');
    }
}
