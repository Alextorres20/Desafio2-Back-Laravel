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
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('pruebas')->onDelete('cascade');
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
