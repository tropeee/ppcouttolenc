<?php

use App\Item;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->unique();
            $table->integer('time_prod')->unsigned();
            $table->string('digital')->default(Item::PRODUCTO_DIGITAL);
            $table->unsignedDecimal('base', 8, 2)->default(0);
            $table->unsignedDecimal('altura', 8, 2)->default(0);
            $table->unsignedDecimal('anchura', 8, 2)->default(0);
            $table->string('unit_area')->nullable();
            $table->unsignedDecimal('duracion', 8, 2)->default(0);
            $table->string('unit_dura')->nullable();
            $table->unsignedBigInteger('area_id');

            $table->foreign('area_id')->references('id')->on('areas');

            $table->softDeletes();
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
        Schema::dropIfExists('items');
    }
}
