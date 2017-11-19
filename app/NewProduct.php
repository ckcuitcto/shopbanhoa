<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewProduct extends Model
{
    protected $table = "new_product";

    protected $fillable = ['id','image'];
}