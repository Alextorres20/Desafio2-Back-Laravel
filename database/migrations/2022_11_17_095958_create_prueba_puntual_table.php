<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePruebaPuntualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//Alicia y Alejandro
        Schema::create('pruebas_puntuales', function (Blueprint $table) {
            $table->unsignedBigInteger('id_prueba');
            $table->foreign('id_prueba')->references('id')->on('pruebas')->onDelete('cascade');
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('id_caracteristica');
            $table->foreign('id_caracteristica')->references('id')->on('caracteristicas')->onDelete('cascade');
            $table->integer('dificultad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prueba_puntual');
    }
}
