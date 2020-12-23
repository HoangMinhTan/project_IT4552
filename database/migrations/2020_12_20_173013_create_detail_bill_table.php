<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_bill', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bill_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('total');
            $table->timestamps();
            $table->foreign('bill_id')->references('id')->on('bill');
            $table->foreign('product_id')->references('id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_bill');
    }
}
