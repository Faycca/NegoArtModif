<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaintController extends Controller
{
    public function index()
    {
        return view('artworks/paint');
    }
}
