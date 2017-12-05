<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_images', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('news_images', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('image',200);
            $table->integer('id_news')->unsigned();
            $table->timestamps();
        });

        Schema::table('news_images', function (Blueprint $table) {
            $table->foreign('id_news')->references('id')->on('news')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_images');
    }
}
