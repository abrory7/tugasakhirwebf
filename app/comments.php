<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table = 'comments';
    protected $fillable = ['user_id', 'posts_id', 'komentar', 'created_at'];

    public function userReply()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function threadReply()
    {
        return $this->belongsTo('App\threadpost', 'posts_id');
    }
}
