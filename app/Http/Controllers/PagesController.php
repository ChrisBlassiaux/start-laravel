<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function __construct()
    {
    }
    //
    public function about() 
    {
        $title = 'À propos';
        $numbers = [1, 2, 3, 4, 5, 6, 7];
        return view('pages/about', compact('title', 'numbers'));
    }
}
