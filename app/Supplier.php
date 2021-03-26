<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
    public function products()
    {
        return $this->belongsToMany('App\product')->withTimestamps();
    }



}
