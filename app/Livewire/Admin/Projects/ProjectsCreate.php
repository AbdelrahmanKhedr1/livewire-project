<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectsCreate extends Component
{
    use WithFileUploads;
    public $name, $description, $image, $link, $category_id, $categories ;
    public function mount(){
        $this->categories = Category::all();
    }
    public function rules(){
        return [
            'name' => ['required','string','min:1','max:200'],
            'description'=>['required','string'],
            'image'=>['required','image'],
            'link'=>['required','url'],
            'category_id'=>['required','numeric','exists:categories,id'],
        ];
    }
    public function attributes()
    {
        return[
            'category_id'=>'Category',
        ];
    }
    public function submit(){
        $data = $this->validate($this->rules(),[], $this->attributes());
        if ($this->image) {
            $img = $this->image->store('uplode', 'public');
            $data['image'] = 'storage/'.$img;
        };

        Project::create($data);
        $this->reset(['name', 'description','image','link', 'category_id']);
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshData')->to(ProjectsData::class);
    }
    public function render()
    {
        return view('admin.projects.projects-create');
    }
}
