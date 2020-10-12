<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepagesController extends Controller
{
    //
    public function home()
    {
        return view('homepages/home');
    }
    public function about()
    {
        return view('homepages/about');
    }
    public function contact()
    {
        return view('homepages/contact');
    }

}
