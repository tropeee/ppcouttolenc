<?php

namespace App;

use App\Respuesta;
use App\Solicitud;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'nombre',
        'solicitud_id',
        'respuesta_id',
    ];

    public function solicitud(){
        return $this->belongsTo(Solicitud::class);
    }
    
    public function respuesta(){
        return $this->belongsTo(Respuesta::class);
    }
}
