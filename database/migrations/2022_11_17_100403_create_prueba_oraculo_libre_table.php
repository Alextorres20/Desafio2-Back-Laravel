<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePruebaOraculoLibreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//Alicia y Alejandro
        Schema::create('pruebas_oraculo_libre', function (Blueprint $table) {
            $table->unsignedBigInteger('id_prueba_oraculo');
            $table->foreign('id_prueba_oraculo')->references('id')->on('pruebas_oraculo')->onDelete('cascade');
            $table->string('palabras_clave');
            $table->integer('porcentaje');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prueba_oraculo');
    }
}
