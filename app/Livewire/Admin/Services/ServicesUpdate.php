<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesUpdate extends Component
{
    public $services, $name, $description , $icon;
    protected $listeners = ['servicesUpdate'];

    public function servicesUpdate($id){
        $this->services =  Service::find($id);
        $this->name = $this->services->name;
        $this->description= $this->services->description;
        $this->icon= $this->services->icon;
        $this->resetValidation();
        $this->dispatch('editModalToggle');
    }
    public function rules(){
        return [
            'name' => ['required','string','min:1','max:200'],
            'description'=>['required','string'],
            'icon'=>['required','string'],
        ];
    }
    public function submit(){
        $data = $this->validate();
        $this->services->update($data);
        $this->dispatch('editModalToggle');
        $this->dispatch('refreshData')->to(ServicesData::class);
    }
    public function render()
    {
        return view('admin.services.services-update');
    }
}
