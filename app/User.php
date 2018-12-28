<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'username', 'email', 'password', 'jeniskelamin', 'userlevel_id',
        'alamat', 'foto', 'bio', 'reputasi', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function user()
    {
        return $this->hasMany('App\threadpost');
    }
    public function userReply()
    {
        return $this->hasMany('App\comments');
    }
}
