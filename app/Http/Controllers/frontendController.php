<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function contact()
    {
        return view('frontend.contact');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function index()
    {
        return view('frontend.index');
    }

    public function menu()
    {
        return view('frontend.menu');
    }
}
