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
            $table->unsignedBigInteger("spa");
            $table->unsignedBigInteger("category");
            $table->string("name");
            $table->decimal("price",12,0);
            $table->string("img");
            $table->foreign('spa')->references('id')->on('spa')->onDelete('restrict');
            $table->foreign('category')->references('id')->on('category')->onDelete('restrict');
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
