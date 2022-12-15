<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePruebasHumanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//Alicia y Alejandro
        Schema::create('pruebas_humanos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_prueba');
            $table->foreign('id_prueba')->references('id')->on('pruebas')->onDelete('cascade');
            $table->unsignedBigInteger('id_humano');
            $table->foreign('id_humano')->references('id')->on('users')->onDelete('cascade');
            $table->primary(['id_prueba', 'id_humano']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prueba_humano');
    }
}
