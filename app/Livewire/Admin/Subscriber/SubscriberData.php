<?php

namespace App\Livewire\Admin\Subscriber;

use App\Models\Subscriber;
use Livewire\Component;
use Livewire\WithPagination;

class SubscriberData extends Component
{
    use WithPagination;
    public $search;
    public function updatingSearch()
    {
        $this->resetPage();
    }
    protected $listeners = ['refreshData' => '$refresh'];
    public function render()
    {
        return view('admin.subscriber.subscriber-data',
            ['data' => Subscriber::where('email','like','%' .$this->search. '%')->paginate(10)]
        );
    }
}
