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
    {
        Schema::create('prueba_puntual', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prueba');
            $table->foreign('id_prueba')->references('id')->on('pruebas')->onDelete('cascade');
            $table->text('descripcion');
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
