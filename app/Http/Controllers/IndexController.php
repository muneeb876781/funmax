<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('indexPage');
    }

    public function career(){
        return view('careers');
    }

    public function services(){
        return view('services');
    }

    public function contact(){
        return view('contact');
    }

    public function Experties(){
        return view('about');
    }

    public function review(){
        return view('review');
    }
}
