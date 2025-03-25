<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller 
{ 
    public function index() 
    { 
        return "Selamat Belajar Framework Laravel 10"; 
    } 

    public function ambilFile() 
    { 
        return view('ambilfile'); 
    } 

    public function getLorem() 
    { 
        return view('v_html.getlorem'); 
    } 
}