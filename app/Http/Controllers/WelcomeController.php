<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('ip');
    }

    public function index() 
    {
        return view('welcome');
    }

    // public function getIndex() 
    // {
    //     return 'Salut les gens';
    // }
}
