<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryUpdate extends Component
{
    public $category, $name;
    protected $listeners = ['categoryUpdate'];

    public function categoryUpdate($id){
        $this->category =  Category::find($id);
        $this->name = $this->category->name;
        $this->resetValidation();
        $this->dispatch('editModalToggle');
    }
    public function rules(){
        return [
            'name' => ['required','min:1','max:200'],
        ];
    }
    public function submit(){
        $data = $this->validate();
        $this->category->update($data);
        $this->dispatch('editModalToggle');
        $this->dispatch('refreshData')->to(CategoryData::class);
    }
    public function render()
    {
        return view('admin.category.category-update');
    }
}
