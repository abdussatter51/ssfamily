<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    
    public function portfolio(){
        return view('frontend.portfolio');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function service(){
        return view('frontend.services');
    }

    public function about(){
        return view('frontend.about');
    }

    public function resume(){
        return view('frontend.resume');
    }



}
