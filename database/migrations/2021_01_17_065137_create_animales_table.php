<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animales', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('especie_id')->unsigned();
            $table->foreign('especie_id')->references('id')->on('especies');

            $table->string('sexo', 15);
            $table->string('ano_nac', 4);
            $table->string('pais', 20);
            $table->string('continente', 4);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animales');
    }
}
