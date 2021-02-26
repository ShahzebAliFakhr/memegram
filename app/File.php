<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'posted_by', 'url', 'type', 'seen'
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'posted_by');
    }

    public function likes()
    {
        return $this->hasMany('App\Like', 'file_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'file_id', 'id');
    }
}
