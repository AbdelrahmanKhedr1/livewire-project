<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectsUpdate extends Component
{
    use WithFileUploads;
    public $projects, $name, $description, $image, $link, $category_id, $categories ;
    public function mount(){
        $this->categories = Category::all();
    }
    protected $listeners = ['projectsUpdate'];

    public function projectsUpdate($id){
        $this->projects =  Project::find($id);
        $this->name = $this->projects->name;
        $this->description= $this->projects->description;
        $this->link= $this->projects->link;
        $this->category_id= $this->projects->category_id;
        $this->resetValidation();
        $this->dispatch('editModalToggle');
    }
    public function rules(){
        return [
            'name' => ['required','string','min:1','max:200'],
            'description'=>['required','string'],
            'image'=>['nullable','image'],
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
            unlink($this->projects->image);
            $img = $this->image->store('uplode', 'public');
            $data['image'] = 'storage/'.$img;
        }else{
            unset( $data['image']);
        };
        $this->projects->update($data);
        $this->dispatch('editModalToggle');
        $this->dispatch('refreshData')->to(projectsData::class);
    }
    public function render()
    {
        return view('admin.projects.projects-update');
    }
}
