<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('image',200);
            $table->integer('id_product')->unsigned();
//            $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });

        // Schema::table('product_images', function (Blueprint $table) {
        //     $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_images', function (Blueprint $table) {
            //
        });
    }
}
