<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';

    public function kategori()
    {
        return $this->hasMany('App/threadpost');
    }
}
