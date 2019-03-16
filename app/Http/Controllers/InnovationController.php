<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InnovationController extends Controller
{
    
    public function home()
    {
        return view('innovation.home');
    }

    public function form()
    {
        return view('innovation.form');
    }

    public function login()
    {
        return view('innovation.login');
    }

    public function softwares()
    {
        return view('innovation.softwares');
    }

     public function contact()
    {
    	return view('innovation.contact');
    }

    public function guide()
    {
        return view('innovation.guide');
    }

    public function about()
    {
        return view('innovation.about');
    }

    public function return_quiz()
    {
        return view('innovation.return_quiz');
    }

    public function indicators()
    {
        return view('innovation.indicators');
    }
}
