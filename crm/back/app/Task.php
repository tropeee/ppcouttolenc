<?php

namespace App;

use App\User;
use App\Ticket;
use App\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    const TASK_ENTREGADO = 'entrgado';
    const TASK_PRODUCCION = 'en producción';
    const TASK_PUBLICADO = 'publicado';
    const TASK_REALIZADO = 'realizado';
    const TASK_RECIBIDO = 'recibido';
    const TASK_REVISION = 'en revisión';

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'status',
        'terminado',
        'ticket_id',
        'service_id',
        'user_id',
    ];

    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
