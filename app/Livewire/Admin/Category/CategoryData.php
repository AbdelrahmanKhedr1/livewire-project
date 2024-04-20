<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryData extends Component
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
        return view('admin.category.category-data',
            ['data' => Category::where('name','like','%' .$this->search. '%')->paginate(10)]
        );
    }

}
