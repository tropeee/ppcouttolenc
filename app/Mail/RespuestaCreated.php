<?php

namespace App\Mail;

use App\Respuesta;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RespuestaCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $respuesta;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Respuesta $respuesta)
    {
        $this->respuesta = $respuesta;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.respuesta_new')->subject('Sistema de Atención Ciudadana: Nueva respuesta');
    }
}
