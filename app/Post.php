<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable=['name','content'];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
