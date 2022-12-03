<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaracteristicasUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//Alicia y Alejandro
        Schema::create('caracteristicas_usuarios', function (Blueprint $table) {
            $table->primary(['id_usuario', 'id_caracteristica']);
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('id_caracteristica');
            $table->foreign('id_caracteristica')->references('id')->on('caracteristicas')->onDelete('cascade');
            $table->integer('valor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caracteristicas_usuarios');
    }
}
