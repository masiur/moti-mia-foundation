<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
    	return view('front.index');
    }

    public function events()
    {
    	return view('front.events');
    }

    public function contact()
    {
    	return view('front.contact');
    }

    public function gallery()
    {
    	return view('front.gallery');
    }

    public function about()
    {
    	return view('front.about');
    }
}
