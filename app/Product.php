<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'code', 'status'];

    public function Supplier()
    {
        return $this->belongsToMany('App\Supplier')->withTimestamps();
    }

}
