<?php

namespace App\Providers;

use App\Respuesta;
use App\Mail\RespuestaCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Respuesta::created(function($respuesta){
            retry(5, function() use ($respuesta){
                $correo = ($respuesta->por_usuario) ? $respuesta->solicitud->user->email : $respuesta->solicitud->email;
                $nombre = ($respuesta->por_usuario) ? $respuesta->solicitud->user->name : $respuesta->solicitud->nombre . ' ' . $respuesta->solicitud->email;
                $destinatarios = [
                    ['name' => $nombre, 'email' => $correo],
                ];
                Mail::to($destinatarios)->send(new RespuestaCreated($respuesta));
            }, 200);
        });
    }
}
