<?php

namespace App\Providers;

use App\Respuesta;
use App\Solicitud;
use Carbon\Carbon;
use App\Mail\RespuestaCreated;
use App\Mail\SolicitudCreated;
use App\Mail\SolicituReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Solicitud::creating(function($solicitud){
            $fecha = Carbon::now()->format('Ymd');
            $slug = Solicitud::PREFIX_TICKET . "-{$fecha}";
            $count = Solicitud::whereRaw("ticket RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            $solicitud->ticket = ($count) ? "{$slug}-" . ++$count : "{$slug}-1";
        });

        Solicitud::created(function($solicitud){
            retry(5, function() use ($solicitud){ 
                $destinatarios = [
                    ['name' => $solicitud->user->name, 'email' => $solicitud->user->email],
                ];
                Mail::to($destinatarios)->send(new SolicitudCreated($solicitud));
            }, 200);
            
            retry(5, function() use ($solicitud){ 
                $destinatarios = [
                    ['name' => $solicitud->nombre, 'email' => $solicitud->email],
                ];
                Mail::to($destinatarios)->send(new SolicituReceived($solicitud));
            }, 200);
        });
        
        Respuesta::created(function($respuesta){
            retry(5, function() use ($respuesta){
                $correo = ($respuesta->por_usuario==1) ? $respuesta->solicitud->user->email : $respuesta->solicitud->email;
                $nombre = ($respuesta->por_usuario==1) ? $respuesta->solicitud->user->name : $respuesta->solicitud->nombre . ' ' . $respuesta->solicitud->email;
                $destinatarios = [
                    ['name' => $nombre, 'email' => $correo],
                ];
                Mail::to($destinatarios)->send(new RespuestaCreated($respuesta));
            }, 200);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
