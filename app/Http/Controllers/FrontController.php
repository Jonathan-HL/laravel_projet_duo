<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view("home");
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function portfolio()
    {
        //
    }

    public function contact()
    {
        //
    }
}
