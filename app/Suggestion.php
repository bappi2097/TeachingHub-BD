<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    public function categories()
    {
        return $this->belongsTo('App\Category', 'categories_id', 'id');
    }
}
