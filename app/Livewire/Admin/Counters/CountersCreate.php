<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersCreate extends Component
{
    public $name, $count , $icon ;
    public function rules(){
        return [
            'name' => ['required','string' ,'min:1','max:200'],
            'count'=>['required','numeric'],
            'icon' => ['required','string'],
        ];
    }
    public function submit(){
        $data = $this->validate();
        Counter::create($data);
        $this->reset(['name', 'count','icon']);
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshData')->to(CountersData::class);
    }
    public function render()
    {
        return view('admin.counters.counters-create');
    }
}
