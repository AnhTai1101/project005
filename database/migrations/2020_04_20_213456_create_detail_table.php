<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            // product's id
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
            // color's id
            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')->references('id')->on('color')->onDelete('cascade');
            // size's id
            $table->unsignedBigInteger('size_id');
            $table->foreign('size_id')->references('id')->on('size')->onDelete('cascade');
            // quantity
            $table->integer('quantity');
            // time
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
        Schema::dropIfExists('detail');
    }
}
