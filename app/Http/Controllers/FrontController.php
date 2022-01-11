<?php

namespace App\Http\Controllers;

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
        return view('pages.blog');
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
