<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('unit')->references('id')->on('units')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_type')->references('id')->on('type_products')->onDelete('cascade')->onUpdate('cascade');
        });


        Schema::table('bill_detail', function (Blueprint $table) {
           $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
           $table->foreign('id_bill')->references('id')->on('bills')->onDelete('cascade')->onUpdate('cascade');
       });

        Schema::table('bills', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });

         Schema::table('product_images', function (Blueprint $table) {
            $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
