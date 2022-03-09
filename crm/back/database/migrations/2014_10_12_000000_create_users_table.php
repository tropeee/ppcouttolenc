<?php

use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('foto')->default('imagenes/perfil/user.jpg');
            $table->string('cargo')->default('Secretario(a)');
            $table->string('rol')->default('Funciones adminstrativas');
            $table->string('direccion')->default('Domicilio Conocido S/N');
            $table->string('telefono',15)->default('722 123 4567');

            $table->string('verified')->default(User::USUARIO_NO_VERIFICADO);
            $table->string('verification_token')->nullable();
            $table->string('admin')->default(User::USUARIO_REGULAR);

            $table->string('password');
            $table->rememberToken();

            $table->string('tipo')->default(User::USUARIO_CLIENTE);
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('area_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('area_id')->references('id')->on('areas');

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
        Schema::dropIfExists('users');
    }
}
