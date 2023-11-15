<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutus(){
        return view('layouts.aboutus');
    }

    public function profil(){
        return view('layouts.profil');
    }

    public function edit(){
        return view('layouts.editprofil');
    }
}
