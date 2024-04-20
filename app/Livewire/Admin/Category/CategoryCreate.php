<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryCreate extends Component
{
    public $name ;
    public function rules(){
        return [
            'name' => ['required','min:1','max:200'],
        ];
    }
    public function submit(){
        $data = $this->validate();
        Category::create($data);
        $this->reset(['name']);
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshData')->to(CategoryData::class);
    }
    public function render()
    {
        return view('admin.category.category-create');
    }
}
