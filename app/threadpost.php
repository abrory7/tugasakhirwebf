<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class threadpost extends Model
{
    protected $table = 'posts';
    protected $fillable = ['user_id', 'kategori_id', 'judul', 'isi', 'created_at', 'updated_at'];

    public function userPoster()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function threadKategori()
    {
        return $this->belongsTo('App\kategori', 'kategori_id');
    }
}
