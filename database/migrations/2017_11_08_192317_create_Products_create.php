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
            $table->text('description')->nullable();
            $table->double('unit_price')->default('0');
            $table->integer('promotion_price')->default('0');
            $table->string('image',200);

            $table->integer('unit')->unsigned();
            // $table->foreign('unit')->references('id')->on('units')->onDelete('cascade')->onUpdate('cascade');

            $table->tinyInteger('new')->default('1');
            $table->integer('quantity')->default('0');
            $table->integer('view')->default('0');
            $table->integer('id_type')->unsigned();
            // $table->foreign('id_type')->references('id')->on('type_products')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('products');
    }
}
