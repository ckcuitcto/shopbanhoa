<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";

    protected $fillable = ['date_order','total','payment','note','id_user'];

    public function bill_detail (){
        return $this->hasMany('App\BillDetail','id_bill','id');
    }

    public function user (){
        return $this->belongsTo('App\User','id_user','id');
    }
}
