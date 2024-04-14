<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index (){
        return view( 'front.index' );
    }
    public function about (){
        return view( 'front.about' );
    }
    public function contact (){
        return view( 'front.contact' );
    }
    public function project (){
        return view( 'front.project' );
    }
    public function service (){
        return view( 'front.service' );
    }
    public function team (){
        return view( 'front.team' );
    }
    public function teatimonial (){
        return view( 'front.teatimonial' );
    }
}
