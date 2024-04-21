<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectsDelete extends Component
{
    public $projects, $name;
    protected $listeners = ['projectsDelete'];

    public function projectsDelete($id){
        $this->projects =  Project::find($id);
        $this->name = $this->projects->name;
        $this->dispatch('deleteModalToggle');
    }

    public function submit(){
        unlink($this->projects->image);
        $this->projects->delete();
        $this->reset(["name","projects"]);
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(ProjectsData::class);
    }
    public function render()
    {
        return view('admin.projects.projects-delete');
    }
}
