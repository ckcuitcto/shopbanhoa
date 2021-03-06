<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->date('date_order');
            $table->double('total');
            $table->string('payment',200)->default('0')->nullable();
            $table->text('note')->nullable();
            $table->string('recipient',200);
            $table->string('email')->nullable();
            $table->text('address');
            $table->string('phone_number',20);
            $table->tinyInteger('confirm')->default('0');
            $table->tinyInteger('deleted')->default('0')->nullable();;
            $table->integer('id_user')->unsigned();
            // $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
//
//        Schema::table('bills', function (Blueprint $table) {
//            $table->foreign('id_customter')->references('id')->on('customer')->onDelete('cascade');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bills', function (Blueprint $table) {
            //
        });
    }
}
