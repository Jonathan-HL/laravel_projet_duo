<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Portofolio;
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
        $portofolio = Portofolio::all();
        return view('pages.portofolio', compact("portofolio"));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
