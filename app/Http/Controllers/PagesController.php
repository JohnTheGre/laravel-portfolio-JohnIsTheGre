<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view ('index');
    }
    public function profile(){
        return view ('profile');
    }
    public function faq(){
        return view ('faq');
    }

    public function blog(){
        return view ('blog');
    }

    public function dashboard(){
        return view ('dashboard');
    }
}
