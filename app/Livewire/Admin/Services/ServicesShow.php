<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesShow extends Component
{
    public $services, $name, $description,$icon;
    protected $listeners = ['servicesShow'];

    public function servicesShow($id){
        $this->services =  Service::find($id);
        $this->name = $this->services->name;
        $this->description= $this->services->description;
        $this->icon= $this->services->icon;
        $this->dispatch('showModalToggle');
    }
    public function render()
    {
        return view('admin.services.services-show');
    }
}
