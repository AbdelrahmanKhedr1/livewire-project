<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersUpdate extends Component
{
    public $counters, $name, $count ,$icon;
    protected $listeners = ['countersUpdate'];

    public function countersUpdate($id){
        $this->counters =  Counter::find($id);
        $this->name = $this->counters->name;
        $this->count= $this->counters->count;
        $this->icon= $this->counters->icon;
        $this->resetValidation();
        $this->dispatch('editModalToggle');
    }
    public function rules(){
        return [
            'name' => ['required','string' ,'min:1','max:200'],
            'count'=>['required','numeric'],
            'icon' => ['required','string'],
        ];
    }
    public function submit(){
        $data = $this->validate();
        $this->counters->update($data);
        $this->dispatch('editModalToggle');
        $this->dispatch('refreshData')->to(CountersData::class);
    }

    public function render()
    {
        return view('admin.counters.counters-update');
    }
}
