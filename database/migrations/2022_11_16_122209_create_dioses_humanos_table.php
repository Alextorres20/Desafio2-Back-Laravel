<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiosesHumanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dioses_humanos', function (Blueprint $table) {
            $table->primary(['id_dios', 'id_humano']);
            $table->unsignedBigInteger('id_dios');
            $table->foreign('id_dios')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('id_humano');
            $table->foreign('id_humano')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('dios_humano');
    }
}
