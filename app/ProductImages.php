<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    protected $table = 'product_images';

    protected $fillable = ['image','product_id'];

    public function product_type(){
        return $this->belongsTo('App\Product','id_product','id');
    }
}
