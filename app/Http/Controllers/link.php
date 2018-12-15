<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class link extends Controller
{
    //HOME
    public function index()
    {
        return view('homeforum');
    }
    public function kategori()
    {
        return view('kategori');
    }
    public function radio()
    {
        return view('radio');
    }
    //KATEGORI
    public function supernatural()
    {
        return view('kategori.supernatural');
    }
    public function politik()
    {
        return view('kategori.politik');
    }
    public function entertainment()
    {
        return view('kategori.entertainment');
    }
    public function animals()
    {
        return view('kategori.animals');
    }
    public function lounge()
    {
        return view('kategori.lounge');
    }
    public function games()
    {
        return view('kategori.games');
    }
}
