<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        // return view('about');
        return "about";
    }
    
    //contact page
    public function contact()
    {
        // return view('contact');
        return "contact";
    }
}
