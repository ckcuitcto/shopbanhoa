<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Introduce extends Model
{
    protected $table = "introduce";

    protected $fillable = ['title','content'];
}
