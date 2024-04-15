<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class AdminloginComponent extends Component
{
    public $email, $password, $remember;
    protected $rules = [
        'email' => 'required|string|email',
        'password' => 'required|string|min:6',
        'remember' => 'nullable'
    ];

    public function submit(){

        $this->validate();

        if(!Auth::guard('admin')->attempt(['email'=>$this->email,'password'=>$this->password],$this->remember))
        {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
                'password' => trans('auth.failed'),
            ]);
        }

        return to_route('admin.dashboard');
    }

    public function render()
    {
        return view('admin.auth.adminlogin-component');
    }
}
