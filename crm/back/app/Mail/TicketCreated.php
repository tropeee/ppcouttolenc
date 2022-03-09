<?php

namespace App\Mail;

use App\Ticket;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TicketCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $ticket;
    public $paquete;
    public $usuario;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Ticket $ticket)
    {
        $this->ticket = $ticket;
        $this->paquete = $ticket->package;
        $this->usuario = $ticket->user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.ticket_new')->subject('BITGOB PLATAFORMA - Nueva solicitud');
    }
}
