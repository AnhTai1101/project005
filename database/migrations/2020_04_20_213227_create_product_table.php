<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            // id
            $table->bigIncrements('id');
            // product's name
            $table->string('name', 100);
            // product's title
            $table->string('title', 200)->nullable();
            // image
            $table->string('image1', 100);
            // image
            $table->string('image2', 100)->nullable();
            // image
            $table->string('image3', 100)->nullable();
            // foreign
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('type')->onDelete('cascade');
            // foreign
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            // description
            $table->text('description')->nullable();
            // price default
            $table->integer('price');
            // promotion default
            $table->integer('promotion')->nullable();
            // quantity
            $table->integer('qty');
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
        Schema::dropIfExists('product');
    }
}
