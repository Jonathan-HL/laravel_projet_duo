<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view("home");
    }

    public function blog()
    {
        $blogs = Blog::all();
       return view("pages.blog", compact("blogs"));
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
