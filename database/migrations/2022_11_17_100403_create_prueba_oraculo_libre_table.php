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
    {
        Schema::create('prueba_oraculo_libre', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prueba_oraculo');
            $table->foreign('id_prueba_oraculo')->references('id')->on('pruebas_oraculo')->onDelete('cascade');
            $table->string('palabras_asociadas');
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
