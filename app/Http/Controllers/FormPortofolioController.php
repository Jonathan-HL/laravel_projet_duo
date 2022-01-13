<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormPortofolioController extends Controller
{
    public function index()
    {
        return view('admin.formportofolio');
    }
}
