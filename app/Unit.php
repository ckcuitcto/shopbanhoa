<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = "units";

    protected $fillable = ['name'];

    public function product(){
        return $this->hasMany('App\Product','unit','id');
    }
}
