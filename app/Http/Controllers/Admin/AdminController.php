<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return  view('admin.index');
    }
    public function login(){
        return  view('admin.auth.login');
    }
    public function setting(){
        return  view('admin.setting.index');
    }
    public function skills()
    {
        return view('admin.skills.index');
    }
    public function subscriber()
    {
        return view('admin.subscriber.index');
    }
}
