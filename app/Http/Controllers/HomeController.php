<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function orderPage(){
        return view('home.orderNow');
    }

    public function career(){
        return view('home.career');
    }
    
    public function appliedCareer(){
        return view('home.appliedCareer');
    }

    public function blog(){
        return view('home.blog');
    }

    public function whyUs(){
        return view('home.whyUs');
    }

    public function brandStory(){
        return view('home.brandStory');
    }

    public function franchiseQuery(){
        return view('home.franchiseQuery');
    }

    public function bookEvent(){
        return view('home.bookEvent');
    }

    public function cartLocator(){
        return view('home.cartLocator');
    }
}
