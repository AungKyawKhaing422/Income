<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function login()
    {
        if(Auth::check()){
            return redirect()->back();
        }
        return view('login');
    }

    public function home()
    {
        return view('home');
    }
}
