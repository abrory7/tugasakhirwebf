<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class insertDB extends Controller
{
    public function createThread(Request $request)
    {
        
        $thread = new \App\threadpost();
        $thread->user_id = Auth::user()->id;
        $thread->judul = $request->input('judul');
        $thread->kategori_id = $request->input('cat');
        $thread->isi = $request->input('isi');
        $validation = $request->validate([
            'judul' => 'required|min:10',
            'isi' => 'required|min:10'
        ]);
        $thread->save();
        return redirect()->route('thread', $thread->id)->with('alertsuccess', 'Data berhasil ditambahkan');
    }
    public function newReply(Request $request)
    {
        
        $reply = new \App\comments();
        $reply->user_id = Auth::user()->id;
        $reply->posts_id = $request->input('idThread');
        $reply->komentar = $request->input('balasan');
        $validation = $request->validate([
            'balasan' => 'required|min:10'
        ]);
        $reply->save();
        return redirect()->route('thread', $request->input('idThread'))->with('alertsuccess', 'Data berhasil ditambahkan');
    }
}
