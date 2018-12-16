<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;

class forumController extends Controller
{
    public function buatThread()
    {
        $kategori = kategori::all();
        return view('buatthread', compact('kategori'));
    }
}
