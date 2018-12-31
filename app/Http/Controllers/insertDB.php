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
    public function editThread(Request $request)
    {
        $edittrit = \App\threadpost::findOrFail($request->input('idpost'));
        $edittrit->judul = $request->input('judul');
        $edittrit->isi = $request->input('isi');
        
        $validation = $request->validate([
            'judul' => 'required|min:10',
            'isi' => 'required|min:10'
        ]);
        
        $edittrit->save();
        return redirect()->route('thread', $edittrit->id)->with('alertsuccess', 'Data berhasil ditambahkan');
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
    public function updateReply(Request $request)
    {
        $reply = \App\comments::findOrFail($request->input('idReply'));
        $reply->komentar = $request->input('balasan');
        
        $validation = $request->validate([
            'balasan' => 'required|min:10'
        ]);
        
        $reply->save();
        return redirect()->route('thread', $request->input('idThread'))->with('alertsuccess', 'Data berhasil ditambahkan');
    }
    public function editProfile(Request $request)
    {
        $editprof = \App\User::findOrFail(Auth::user()->id);
        $editprof->alamat = $request->input('alamat');
        $editprof->bio = $request->input('bio');
        
        $validation = $request->validate([
            'foto' => 'mimes:jpg,jpeg,png|max:1024',
            'bio' => 'max:150'
        ]);
        if (empty($request->file('foto'))){
            $editprof->foto = $editprof->foto;
        }
        else{
            // unlink('res/images/profile/'.$editprof->foto); //menghapus file lama
            $foto = $request->file('foto');
            $ext = $foto->getClientOriginalExtension();
            $namaBaru = 'fotoprofil'.rand(1000, 10000).".".$ext;
            $foto->move('res/images/profil',$namaBaru);
            $editprof->foto = $namaBaru;
        }
        $editprof->save();
        return redirect()->route('profil', Auth::user()->id)->with('alertsuccess', 'Data berhasil ditambahkan');
    }
    public function naikjabatan(Request $request)
    {
        $jadimoderator = \App\user::findOrFail($request->input('id'));
        $jadimoderator->userlevel_id = $request->input('newuserlevel');
        
        $jadimoderator->save();
        return redirect()->route('profil', $jadimoderator->id)->with('alertsuccess', 'Data berhasil ditambahkan');
    }
    public function turunjabatan(Request $request)
    {
        $jadiuser = \App\user::findOrFail($request->input('id'));
        $jadiuser->userlevel_id = $request->input('newuserlevel');
        
        $jadiuser->save();
        return redirect()->route('profil', $jadiuser->id)->with('alertsuccess', 'Data berhasil ditambahkan');
    }
    public function tambahreputasi(Request $request, $id)
    {
        $tambahreputasi = \App\user::findOrFail($id);
        $tambahreputasi->reputasi = $tambahreputasi->reputasi+1;
        
        $tambahreputasi->save();
        return redirect()->route('thread', $request->input('threadID'))->with('alertsuccess', 'Data berhasil ditambahkan');
    }
    public function turunreputasi(Request $request, $id)
    {
        $turunreputasi = \App\user::findOrFail($id);
        $turunreputasi->reputasi = $turunreputasi->reputasi-1;
        
        $turunreputasi->save();
        return redirect()->route('thread', $request->input('threadID'))->with('alertsuccess', 'Data berhasil ditambahkan');
    }
}
