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
    {
        Schema::create('prueba_oraculo_eleccion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prueba_oraculo');
            $table->foreign('id_prueba_oraculo')->references('id')->on('pruebas_oraculo')->onDelete('cascade');
            $table->string('caracteristica_asociada');
            $table->integer('valor');
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
