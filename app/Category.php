<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function classes()
    {
        return $this->belongsTo('App\Classes', 'class_id', 'id');
    }
    public function books()
    {
        return $this->hasMany('App\Book', 'categories_id', 'id');
    }

    public function suggestions()
    {
        return $this->hasMany('App\Suggestion', 'categories_id', 'id');
    }
}
