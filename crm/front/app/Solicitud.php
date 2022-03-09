<?php

namespace App;

use App\File;
use App\User;
use App\Respuesta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solicitud extends Model
{
    use SoftDeletes;

    const STATUS_ATENDIDO = 'entregado';    // Hemos respondido al ciudadano
    const COLOR_STATUS_ATENDIDO = '43a047';

    const STATUS_RECIBIDO = 'nuevo';    // Solicitud nueva
    const COLOR_STATUS_RECIBIDO = '9e9e9e';
    
    const STATUS_RESPONDIDO = 'recibido';   // El ciudadano nos ha contestado
    const COLOR_STATUS_RESPONDIDO = 'ffeb3b';
    
    const STATUS_RESUELTO = 'termiando';    // El tema ha sido resuleto
    const COLOR_STATUS_RESUELTO = '2196f3';

    const PREFIX_TICKET = 'ATN';

    protected $table = 'solicitudes';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'tel',
        'municipio',
        'solicitud',
        'descripcion',
        'status',

        'adjuntos',
        'tipo',
        'importante',
        'destacado',

        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function respuestas(){
        return $this->hasMany(Respuesta::class);
    }
    
    public function files(){
        return $this->hasMany(File::class);
    }

    public function isFinished(){
        return ($this->status == Solicitud::STATUS_RESUELTO);
    }

    public function isImportant(){
        return ($this->importante==1);
    }
    
    public function isFavorite(){
        return ($this->destacado==1);
    }

    public function getColor(){
        switch ($this->status) {
            case Solicitud::STATUS_RECIBIDO:
                $color = Solicitud::COLOR_STATUS_RECIBIDO;
            break;
            case Solicitud::STATUS_ATENDIDO:
                $color = Solicitud::COLOR_STATUS_ATENDIDO;
            break;
            case Solicitud::STATUS_RESPONDIDO:
                $color = Solicitud::COLOR_STATUS_RESPONDIDO;
            break;
            default:
                $color = Solicitud::COLOR_STATUS_RESUELTO;
            break;
        }
        return $color;
    }
}
