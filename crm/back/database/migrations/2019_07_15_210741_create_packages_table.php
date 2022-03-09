<?php

use App\Package;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('nombre')->unique();
            $table->string('disponible')->default(Package::PAQUETE_DISPONIBLE);
            $table->string('individual')->default(Package::PAQUETE_INDIVIDUAL);
            $table->integer('dias_habiles')->unsigned()->default(1);
            $table->integer('max_extra')->unsigned()->default(0);
            $table->unsignedBigInteger('test_id')->nullable();
            $table->foreign('test_id')->references('id')->on('tests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
