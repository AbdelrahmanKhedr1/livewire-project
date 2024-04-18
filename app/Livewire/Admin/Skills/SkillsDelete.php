<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsDelete extends Component
{

    public $skill, $name;
    protected $listeners = ['skillDelete'];

    public function skillDelete($id){
        $this->skill =  Skill::find($id);
        $this->name = $this->skill->name;
        $this->dispatch('deleteModalToggle');
    }
    public function submit(){
        $this->skill->delete();
        $this->reset(["name","skill"]);
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(SkillsData::class);
    }

    public function render()
    {
        return view('admin.skills.skills-delete');
    }
}
