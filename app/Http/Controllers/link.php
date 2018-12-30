<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\threadpost;
use App\comments;
use App\User;
use Auth;

class link extends Controller
{
    //HOME
    public function index()
    {
        $hotThread = threadpost::latest()->take(5)->get();
        return view('homeforum', compact('hotThread'));
    }
    public function kategori()
    {
        return view('kategori');
    }
    public function radio()
    {
        return view('radio');
    }
    public function profil($id)
    {
        $profil = User::find($id);
        return view('profil', compact('profil'));
    }
    public function editprofil($id)
    {
        $editprofil = User::find($id);
        if($editprofil->id != Auth::user()->id)
        {
            return redirect()->route('index');
        }
        else
        {
            return view('editprofil', compact('editprofil'));
        }
    }
    //KATEGORI
    public function animals()
    {
        $thread = threadpost::latest()->where('kategori_id', '=', "1")->orderBy('created_at','desc')->get();
        return view('kategori.animals', compact('thread'));
    }
    public function supernatural()
    {
        $thread = threadpost::latest()->where('kategori_id', '=', "2")->orderBy('created_at','desc')->get();
        return view('kategori.supernatural', compact('thread'));
    }
    public function politik()
    {
        $thread = threadpost::latest()->where('kategori_id', '=', "3")->orderBy('created_at','desc')->get();
        return view('kategori.politik', compact('thread'));
    }
    public function entertainment()
    {
        $thread = threadpost::latest()->where('kategori_id', '=', "4")->orderBy('created_at','desc')->get();
        return view('kategori.entertainment', compact('thread'));
    }
    public function lounge()
    {
        $thread = threadpost::latest()->where('kategori_id', '=', "5")->orderBy('created_at','desc')->get();
        return view('kategori.lounge', compact('thread'));
    }
    public function games()
    {
        $thread = threadpost::latest()->where('kategori_id', '=', "6")->orderBy('created_at','desc')->get();
        return view('kategori.games', compact('thread'));
    }
    public function threadlink($id)
    {
        $thread = threadpost::find($id);
        $reply = comments::oldest()->where('posts_id', '=', $thread->id)->paginate(7);
        return view('thread', compact('thread', 'reply'));
    }
    public function reply($id)
    {
        $threadID = threadpost::find($id);
        return view('reply', compact('threadID'));
    }
}
