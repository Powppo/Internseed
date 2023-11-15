<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EditProfilController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('edit');
    }

    public function show
}