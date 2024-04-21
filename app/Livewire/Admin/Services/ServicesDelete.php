<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesDelete extends Component
{
    public $services, $name;
    protected $listeners = ['servicesDelete'];

    public function servicesDelete($id){
        $this->services =  Service::find($id);
        $this->name = $this->services->name;
        $this->dispatch('deleteModalToggle');
    }

    public function submit(){
        $this->services->delete();
        $this->reset(["name","services"]);
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(ServicesData::class);
    }

    public function render()
    {
        return view('admin.services.services-delete');
    }
}
