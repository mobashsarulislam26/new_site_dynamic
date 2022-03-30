<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
     public function home()
    {
        return view('home');
    }
    public function shop()
    {
     return view('shop');
    }
    public function blog()
    {
        return view('blog');
    }
    public function page()
    {
        return view('page');
    }
    public function about()
    {
     return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
}
