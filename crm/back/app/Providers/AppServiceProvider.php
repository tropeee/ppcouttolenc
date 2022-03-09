<?php

namespace App\Providers;

use App\User;
use App\Ticket;
use App\Product;
use Carbon\Carbon;
use App\Mail\UserCreated;
use App\Mail\TicketCreated;
use App\Mail\UserMailChanged;
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

        User::created(function($user){
            //Mail::to($user->email)->send(new UserCreated($user));
            retry(5, function() use ($user){ 
                Mail::to($user)->send(new UserCreated($user));
            }, 200);
        });
        
        User::updated(function($user){
            if ($user->isDirty('email')) {
                retry(5, function() use ($user){ 
                    Mail::to($user)->send(new UserMailChanged($user));
                }, 200);
            }
        });

        Product::updated(function($product){
            if ($product->quantity==0 && $product->isAvailable()) {
                $product->status = Product::PRODUCTO_NO_DISPONIBLE;
                $product->email_verified_at = Carbon::now();
                $product->save();
            }
        });

        Ticket::created(function($ticket){
            retry(5, function() use ($ticket){ 
                $destinatarios = [
                    ['name' => 'FRANCISCO SERRANO', 'email' => 'serrano@bitgob.com'],
                    ['name' => 'ELIZABETH VALDÉZ', 'email' => 'gobiernos@bitgob.com'],
                    ['name' => 'VALERIA VEGA', 'email' => 'creativo@bitgob.com'],
                    ['name' => 'MARLENNE LEE', 'email' => 'creacionliteraria@bitgob.com'],
                    ['name' => 'ROCÍO ROMÁN', 'email' => 'media@bitgob.com'],
                    ['name' => 'RENE SOTO', 'email' => 'desarrolloweb@bitgob.com'],
                ];
                Mail::to($destinatarios)->send(new TicketCreated($ticket));
            }, 200);
        });
    }
}
