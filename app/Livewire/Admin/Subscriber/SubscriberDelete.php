<?php

namespace App\Livewire\Admin\Subscriber;

use App\Models\Subscriber;
use Livewire\Component;

class SubscriberDelete extends Component
{
    public $subscriber, $email;
    protected $listeners = ['subscriberDelete'];

    public function subscriberDelete($id){
        $this->subscriber =  Subscriber::find($id);
        $this->email = $this->subscriber->email;
        $this->dispatch('deleteModalToggle');
    }
    public function submit(){
        $this->subscriber->delete();
        $this->reset(["email","subscriber"]);
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(SubscriberData::class);
    }
    public function render()
    {
        return view('admin.subscriber.subscriber-delete');
    }
}
