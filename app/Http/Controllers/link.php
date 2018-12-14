<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class link extends Controller
{
    public function index()
    {
        return view('homeforum');
    }
    public function kategori()
    {
        return view('kategori');
    }
}
