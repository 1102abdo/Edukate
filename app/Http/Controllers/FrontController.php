<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }
    public function about(){
        return view('front.about');
    }
    public function courses(){
        return view('front.courses');
    }
    public function contact(){
        return view('front.contact');
    }
    public function team(){
        return view('front.team');
    }
    public function testmonials(){
        return view('front.testmonials');
    }
}
