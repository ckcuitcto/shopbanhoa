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
            $table->string('payment',200);
            $table->text('note');
            $table->integer('id_customter')->unsigned();
//            $table->foreign('id_customter')->references('id')->on('customer')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::table('bills', function (Blueprint $table) {
            $table->foreign('id_customter')->references('id')->on('customer')->onDelete('cascade');
        });
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
