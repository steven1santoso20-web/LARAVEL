<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function service()
    {
        return view('service');
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
