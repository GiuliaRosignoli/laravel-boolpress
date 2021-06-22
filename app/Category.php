<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Relationships categories-posts
    public function posts() {  // posts - plural
        return $this->hasMany('App\Post');
    }
}
