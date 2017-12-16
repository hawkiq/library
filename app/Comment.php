<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function book(){
        return $this->belongsTo('App\Book');
    }
}
