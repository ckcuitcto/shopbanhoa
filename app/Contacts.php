<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = "contacts";

    protected $fillable = ['address','email','phone_number','website','map'];

}
