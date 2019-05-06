<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function images(){
        return $this->hasMany('App\Image');
    }
    public function customer(){
        return $this->hasMany('App\Customer');
    }
}
