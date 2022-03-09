<?php

namespace App;

use App\Test;
use App\Ticket;
use App\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use SoftDeletes;

    const PAQUETE_DISPONIBLE='true';
    const PAQUETE_NO_DISPONIBLE='false';

    const PAQUETE_INDIVIDUAL='1';
    const PAQUETE_NO_INDIVIDUAL='0';

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'nombre',
        'disponible',
        'individual',
        'dias_habiles',
        'max_extra',
        'test_id',
    ];

    public function test(){
        return $this->belongsTo(Test::class);
    }

    public function services(){
        return $this->hasMany(Service::class);
    }

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }

    public function isIndividual(){
        return $this->individual == Package::PAQUETE_INDIVIDUAL;
    }
}
