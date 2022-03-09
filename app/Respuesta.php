<?php

namespace App;

use App\File;
use App\Solicitud;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Respuesta extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'respuesta',
        'por_usuario',
        'adjuntos',
        'solicitud_id',
    ];

    public function solicitud(){
        return $this->belongsTo(Solicitud::class);
    }

    public function files(){
        return $this->hasMany(File::class);
    }
}
