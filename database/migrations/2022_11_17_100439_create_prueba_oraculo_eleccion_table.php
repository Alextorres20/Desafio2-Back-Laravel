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
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('pruebas_oraculo')->onDelete('cascade');
            $table->primary('id');
            $table->unsignedBigInteger('id_caracteristica');
            $table->foreign('id_caracteristica')->references('id')->on('caracteristicas')->onDelete('cascade');
            $table->integer('valor');
            $table->string('respuesta_correcta');
            $table->string('respuesta_incorrecta');
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
