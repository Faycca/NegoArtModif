<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllartsController extends Controller
{
    public function index()
    {
        return view('artworks/allart');
    }
}
