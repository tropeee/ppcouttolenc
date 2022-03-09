<?php

namespace App;

use App\Task;
use App\User;
use App\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use SoftDeletes;

    const TICKET_ENTREGADO = 'entrgado';
    const TICKET_PRODUCCION = 'en producción';
    const TICKET_PUBLICADO = 'publicado';
    const TICKET_REALIZADO = 'realizado';
    const TICKET_RECIBIDO = 'recibido';
    const TICKET_REVISION = 'en revisión';

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'status',
        'fecha',
        'terminado',
        'cuestionario',
        'user_id',
        'package_id',
    ];

    public function package(){
        return $this->belongsTo(Package::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tasks(){
        return $this->hasMany(Task::class);
    }
}
