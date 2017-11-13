<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";

    protected $fillable = ['date_order','total','payment','note','id_customter'];

    public function bill_detail (){
        return $this->hasMany('App\BillDetail','id_bill','id');
    }

    public function customer (){
        return $this->belongsTo('App\Customer','id_bill','id');
    }
}
