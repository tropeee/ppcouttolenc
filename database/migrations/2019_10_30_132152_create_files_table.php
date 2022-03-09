<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->unsignedBigInteger('solicitud_id')->nullable();
            $table->unsignedBigInteger('respuesta_id')->nullable();
            
            $table->foreign('solicitud_id')->references('id')->on('solicitudes');
            $table->foreign('respuesta_id')->references('id')->on('respuestas');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
