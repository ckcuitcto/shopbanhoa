<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('full_name',200);
            $table->string('email',200)->nullable();
            $table->string('password');
            $table->integer('level')->default('0');
            $table->tinyInteger('gender');
            $table->string('address',200)->nullable();
            $table->string('phone_number',20)->nullable();
            $table->date('birthday');
            $table->text('note')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
