<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SculptureController extends Controller
{
    public function index()
    {
        return view('artworks.sculpture');
    }
}
