<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersDelete extends Component
{
    public $counters, $name, $count ,$icon;
    protected $listeners = ['countersDelete'];

    public function countersDelete($id){
        $this->counters =  Counter::find($id);
        $this->name = $this->counters->name;
        $this->count = $this->counters->count;
        $this->icon = $this->counters->icon;
        $this->dispatch('deleteModalToggle');
    }
    public function submit(){
        $this->counters->delete();
        $this->reset(["name","counters",'count','icon']);
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(CountersData::class);
    }

    public function render()
    {
        return view('admin.counters.counters-delete');
    }
}
