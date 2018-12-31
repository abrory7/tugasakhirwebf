<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use App\threadpost;
use Auth;

class forumController extends Controller
{
    public function buatThread()
    {
        if(Auth::check()){
            $kategori = kategori::all();
            return view('buatthread', compact('kategori'));
        }
        else
        {
            return redirect()->route('index');
        }
    }
    public function editThread($id)
    {
        $kategori = kategori::all();
        $isitrit = threadpost::findOrFail($id);
        if(Auth::check())
        {
            if($isitrit->userPoster->id != Auth::user()->id)
            {
                return redirect()->route('index');
            }
            else
            {
                return view('editthread', compact('kategori', 'isitrit'));
            }
        }
        else
        {
            return redirect()->route('index');   
        }
    }
    public function destroyThread($id)
    {
        $deletetrit = threadpost::where('id', $id)->delete();
        return redirect()->route('index')->with('alertwarning', 'Data berhasil dihapus');
    }
    public function destroyuser($id)
    {
        $deletetrit = threadpost::where('id', $id)->delete();
        return redirect()->route('index')->with('alertwarning', 'Data berhasil dihapus');
    }
}
