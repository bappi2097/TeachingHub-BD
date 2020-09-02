<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function categories()
    {
        return $this->belongsTo('App\Category', 'categories_id', 'id');
    }
}
