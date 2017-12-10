<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_detail', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->double('unit_price');
            $table->integer('quantity');

            $table->integer('id_bill')->unsigned();
            // $table->foreign('id_bill')->references('id')->on('bills')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('id_product')->unsigned();
            // $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

//        Schema::table('bill_detail', function (Blueprint $table) {
//            $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
//        });
//
//        Schema::table('bill_detail', function (Blueprint $table) {
//            $table->foreign('id_bill')->references('id')->on('bills')->onDelete('cascade')->onUpdate('cascade');
//        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bill_detail', function (Blueprint $table) {
            //
        });
    }
}
