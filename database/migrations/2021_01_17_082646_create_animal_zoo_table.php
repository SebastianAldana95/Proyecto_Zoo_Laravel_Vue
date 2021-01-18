<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalZooTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_zoo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('animal_id')->unsigned();
            $table->integer('zoo_id')->unsigned();

            $table->foreign('animal_id')->references('id')->on('animales');
            $table->foreign('zoo_id')->references('id')->on('zoos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_zoo');
    }
}
