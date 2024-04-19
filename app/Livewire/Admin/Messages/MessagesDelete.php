<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesDelete extends Component
{
    public $messages, $name, $email , $subject;
    protected $listeners = ['messagesDelete'];

    public function messagesDelete($id){
        $this->messages =  Message::find($id);
        $this->name = $this->messages->name;
        $this->email= $this->messages->email;
        $this->subject= $this->messages->subject;
        $this->dispatch('deleteModalToggle');
    }

    public function submit(){
        $this->messages->delete();
        $this->reset(["name","messages", "email" ,"subject"]);
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(MessagesData::class);
    }
    public function render()
    {
        return view('admin.messages.messages-delete');
    }
}
