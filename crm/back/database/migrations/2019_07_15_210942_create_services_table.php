<?php

use App\Service;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('cantidad')->unsigned()->default(1);
            $table->string('force_individual')->default(Service::FORCE_FALSE);
            $table->unsignedBigInteger('package_id');
            $table->unsignedBigInteger('test_id')->nullable();
            $table->unsignedBigInteger('item_id');
            $table->foreign('package_id')->references('id')->on('packages');
            $table->foreign('test_id')->references('id')->on('tests');
            $table->foreign('item_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
