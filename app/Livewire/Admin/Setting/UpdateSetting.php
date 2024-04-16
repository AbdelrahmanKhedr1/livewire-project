<?php

namespace App\Livewire\Admin\Setting;

use App\Models\Setting;
use Livewire\Component;

class UpdateSetting extends Component
{
    public $setting;
    public function mount(){
        $this->setting = Setting::find(1);
    }
    protected $rules = [
        'setting.name' => ['required', 'string'],
        'setting.email' => ['required', 'email'],
        'setting.phone' => ['required'],
        'setting.address' => ['nullable','string'],
        'setting.facebook'=>['nullable','url'],
        'setting.twitter'=>['nullable','url'],
        'setting.linkedin'=>['nullable','url'],
        'setting.instagram'=>['nullable','url'],
    ];
    public function submit(){
        $this->validate();
        $this->setting->save();
        session()->flash('setting', 'Post successfully updated.');
    }
    public function render()
    {
        return view('admin.setting.update-setting');
    }
}
