<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = "type_products";

    protected $fillable = ['name','description','image'];

    public function product(){
        return $this->hasMany('App\Product','id_type','id');
    }
}
