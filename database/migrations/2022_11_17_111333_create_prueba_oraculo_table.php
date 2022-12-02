<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePruebaOraculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//Alicia y Alejandro
        Schema::create('pruebas_oraculo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prueba');
            $table->foreign('id_prueba')->references('id')->on('pruebas')->onDelete('cascade');
            $table->string('tipo');
            $table->string('pregunta');
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
