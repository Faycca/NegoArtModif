<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextileController extends Controller
{
    public function index()
    {
        return view('artworks/textile');
    }
}
