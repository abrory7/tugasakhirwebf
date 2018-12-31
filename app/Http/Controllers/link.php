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
        $latestThread = threadpost::latest()->take(5)->get();
        $hotThread = threadpost::latest()->take(5)->orderby('totalview', 'desc')->get();
        $topRep = user::take(5)->orderby('reputasi', 'desc')->get();
        return view('homeforum', compact('latestThread', 'hotThread', 'topRep'));
    }
    public function kategori()
    {
        return view('kategori');
    }
    public function radio()
    {
        $hotThread = threadpost::latest()->take(5)->orderby('totalview', 'desc')->get();
        $topRep = user::take(5)->orderby('reputasi', 'desc')->get();
        return view('radio', compact('latestThread', 'hotThread', 'topRep'));
    }
    public function about()
    {
        $hotThread = threadpost::latest()->take(5)->orderby('totalview', 'desc')->get();
        $topRep = user::take(5)->orderby('reputasi', 'desc')->get();
        return view('about', compact('hotThread', 'topRep'));
    }
    public function profil($id)
    {
        $profil = User::find($id);
        return view('profil', compact('profil'));
    }
    public function editprofil($id)
    {
        if(Auth::check())
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
        else
        {
            return redirect()->route('index');
        }
    }
    //KATEGORI
    public function animals()
    {
        $thread = threadpost::latest()->where('kategori_id', '=', "1")->orderBy('created_at','desc')->get();
        $hotThread = threadpost::latest()->take(5)->orderby('totalview', 'desc')->get();
        $topRep = user::take(5)->orderby('reputasi', 'desc')->get();
        return view('kategori.animals', compact('thread','hotThread', 'topRep'));
    }
    public function supernatural()
    {
        $thread = threadpost::latest()->where('kategori_id', '=', "2")->orderBy('created_at','desc')->get();
        $hotThread = threadpost::latest()->take(5)->orderby('totalview', 'desc')->get();
        $topRep = user::take(5)->orderby('reputasi', 'desc')->get();
        return view('kategori.supernatural', compact('thread', 'hotThread', 'topRep'));
    }
    public function politik()
    {
        $thread = threadpost::latest()->where('kategori_id', '=', "3")->orderBy('created_at','desc')->get();
        $hotThread = threadpost::latest()->take(5)->orderby('totalview', 'desc')->get();
        $topRep = user::take(5)->orderby('reputasi', 'desc')->get();
        return view('kategori.politik', compact('thread', 'hotThread', 'topRep'));
    }
    public function entertainment()
    {
        $thread = threadpost::latest()->where('kategori_id', '=', "4")->orderBy('created_at','desc')->get();
        $hotThread = threadpost::latest()->take(5)->orderby('totalview', 'desc')->get();
        $topRep = user::take(5)->orderby('reputasi', 'desc')->get();
        return view('kategori.entertainment', compact('thread', 'hotThread', 'topRep'));
    }
    public function lounge()
    {
        $thread = threadpost::latest()->where('kategori_id', '=', "5")->orderBy('created_at','desc')->get();
        $hotThread = threadpost::latest()->take(5)->orderby('totalview', 'desc')->get();
        $topRep = user::take(5)->orderby('reputasi', 'desc')->get();
        return view('kategori.lounge', compact('thread', 'hotThread', 'topRep'));
    }
    public function games()
    {
        $thread = threadpost::latest()->where('kategori_id', '=', "6")->orderBy('created_at','desc')->get();
        $hotThread = threadpost::latest()->take(5)->orderby('totalview', 'desc')->get();
        $topRep = user::take(5)->orderby('reputasi', 'desc')->get();
        return view('kategori.games', compact('thread', 'hotThread', 'topRep'));
    }
    public function threadlink($id)
    {
        $thread = threadpost::find($id);
        $thread->totalview = $thread->totalview+1;
        $thread->save();
        $reply = comments::oldest()->where('posts_id', '=', $thread->id)->paginate(7);
        return view('thread', compact('thread', 'reply'));
    }
    public function reply($id)
    {
        $threadID = threadpost::find($id);
        return view('reply', compact('threadID'));
    }
    public function editReply($id, $replyid)
    {
        $threadID = threadpost::find($id);
        $reply = comments::find($replyid);
        if(Auth::check())
        {
            if($reply->userReply->id != Auth::user()->id)
            {
                return redirect()->route('index');
            }
            else
            {
                return view('editreply', compact('threadID', 'reply'));
            }
        }
        else
        {
            return redirect()->route('index');
        }
    }
}
