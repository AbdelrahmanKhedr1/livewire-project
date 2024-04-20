<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryDelete extends Component
{
    public $category, $name;
    protected $listeners = ['categoryDelete'];

    public function categoryDelete($id){
        $this->category =  Category::find($id);
        $this->name = $this->category->name;
        $this->dispatch('deleteModalToggle');
    }
    public function submit(){
        $this->category->delete();
        $this->reset(["name","category"]);
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(CategoryData::class);
    }
    public function render()
    {
        return view('admin.category.category-delete');
    }
}
