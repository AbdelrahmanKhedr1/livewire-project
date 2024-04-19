<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesDelete extends Component
{
    public $services, $name, $description , $icon;
    protected $listeners = ['servicesDelete'];

    public function servicesDelete($id){
        $this->services =  Service::find($id);
        $this->name = $this->services->name;
        $this->description= $this->services->description;
        $this->icon= $this->services->icon;
        $this->dispatch('deleteModalToggle');
    }

    public function submit(){
        $this->services->delete();
        $this->reset(["name","services", "description" ,"icon"]);
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(ServicesData::class);
    }

    public function render()
    {
        return view('admin.services.services-delete');
    }
}
