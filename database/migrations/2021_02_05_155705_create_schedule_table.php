<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("customer");
            $table->unsignedBigInteger("spa");
            $table->unsignedBigInteger("service")->nullable();
            $table->string("time");
            $table->string("phone_contact")->nullable();
            $table->text("note")->nullable();
            $table->enum("status",["waiting","cancel","done"])->default("waiting");
            $table->foreign('customer')->references('id')->on('customer')->onDelete('cascade');
            $table->foreign('service')->references('id')->on('service')->onDelete('restrict');
            $table->foreign('spa')->references('id')->on('spa')->onDelete('restrict');
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
        Schema::dropIfExists('schedule');
    }
}
