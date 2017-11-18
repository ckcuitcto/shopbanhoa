<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name',100);
            $table->text('description');
            $table->double('unit_price');
            $table->integer('promation_price');
            $table->string('image',200);
            $table->integer('unit')->unsigned();
            $table->foreign('unit')->references('id')->on('units');
            $table->tinyInteger('new');
            $table->integer('quantity');
            $table->integer('view');
            $table->integer('id_type')->unsigned();
            $table->foreign('id_type')->references('id')->on('type_products')->onDelete('cascade');
            $table->timestamps();
        });

//        Schema::table('products', function (Blueprint $table) {
//            $table->foreign('id_type')->references('id')->on('type_products')->onDelete('cascade');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
