<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = "classes";
    public function categories()
    {
        return $this->hasMany('App\Category', 'class_id', 'id');
    }
}
