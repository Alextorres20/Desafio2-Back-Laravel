<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePruebaOraculoEleccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//Alicia y Alejandro
        Schema::create('pruebas_oraculo_eleccion', function (Blueprint $table) {
            $table->unsignedBigInteger('id_prueba_oraculo');
            $table->foreign('id_prueba_oraculo')->references('id')->on('pruebas_oraculo')->onDelete('cascade');
            $table->unsignedBigInteger('caracteristica_asociada');
            $table->foreign('caracteristica_asociada')->references('id')->on('caracteristicas')->onDelete('cascade');
            $table->integer('valor');
            $table->string('respuesta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prueba_eleccion');
    }
}
