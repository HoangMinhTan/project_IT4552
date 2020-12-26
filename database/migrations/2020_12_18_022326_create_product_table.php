<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('quantity');
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('manufacturer_id')->unsigned();
            $table->integer('in_price');
            $table->integer('out_price');
            $table->string('note')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('manufacturer_id')->references('id')->on('manufacturer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
