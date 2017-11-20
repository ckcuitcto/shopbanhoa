<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsImages extends Model
{
    protected $table = 'news_images';

    protected $fillable = ['image','news_id'];

    public function news(){
        return $this->belongsTo('App\News','id_news','id');
    }
}
