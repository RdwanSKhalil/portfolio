<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home(){
        return view('home');
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
}
