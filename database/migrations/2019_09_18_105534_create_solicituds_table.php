<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ticket')->unique()->nullable();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('tel');
            $table->string('municipio');
            $table->string('solicitud');
            $table->text('descripcion');
            $table->string('status');
            
            $table->boolean('importante')->default(false);
            $table->boolean('destacado')->default(false);

            $table->unsignedInteger('user_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('solicitudes');
    }
}
