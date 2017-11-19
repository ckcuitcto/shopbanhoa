<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = ['name','description','unit_price','promotion_price','image','unit','new','quantity','view','id_type'];

    public function product_type(){
        return $this->belongsTo('App\ProductType','id_type','id');
    }

    public function unit()
    {
        return $this->belongsTo('App\Unit','unit','id');
    }

    public function bill_detail(){
        return $this->hasMany('App\BillDetail','id_product','id');
    }

    public function product_images(){
        return $this->hasMany('App\ProductImages','product_id','id');
    }
}
