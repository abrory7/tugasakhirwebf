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
        $postCounter = \App\User::findOrFail(Auth::user()->id);
        $thread->judul = $request->input('judul');
        $thread->kategori_id = $request->input('cat');
        $thread->isi = $request->input('isi');
        $validation = $request->validate([
            'judul' => 'required|min:10',
            'isi' => 'required|min:10'
        ]);
        $thread->save();
        $postCounter->totalpost = $postCounter->totalpost+1;
        $postCounter->save();
        return redirect()->route('thread', $thread->id)->with('alertsuccess', 'Data berhasil ditambahkan');
    }
    public function newReply(Request $request)
    {
        
        $reply = new \App\comments();
        $postCounter = \App\User::findOrFail(Auth::user()->id);
        $reply->user_id = Auth::user()->id;
        $reply->posts_id = $request->input('idThread');
        $reply->komentar = $request->input('balasan');
        $validation = $request->validate([
            'balasan' => 'required|min:10'
        ]);
        $reply->save();
        $postCounter->totalpost = $postCounter->totalpost+1;
        $postCounter->save();
        return redirect()->route('thread', $request->input('idThread'))->with('alertsuccess', 'Data berhasil ditambahkan');
    }
    public function editProfile(Request $request, $id)
    {
        $editprof = \App\User::findOrFail($id);
        $editprof->alamat = $request->input('alamat');
        $editprof->bio = $request->input('bio');
        if (empty($request->file('foto'))){
            $editprof->foto = $editprof->foto;
        }
        else{
            // unlink('res/images/profile/'.$editprof->foto); //menghapus file lama
            $foto = $request->file('foto');
            $ext = $foto->getClientOriginalExtension();
            $namaBaru = 'fotoprofil'.rand(1000, 10000).".".$ext;
            $file->move('res/images/profile',$namaBaru);
            $editprof->foto = $namaBaru;
        }
        $validation = $request->validate([
            'foto' => 'mimes:jpg,jpeg,png|max:1024',
            'bio' => 'max:150'
        ]);
        $editprof->save();
        return redirect()->route('profil', $thread->id)->with('alertsuccess', 'Data berhasil ditambahkan');
    }
}
