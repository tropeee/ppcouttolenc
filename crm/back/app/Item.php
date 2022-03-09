<?php

namespace App;

use App\Area;
use App\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    const PRODUCTO_DIGITAL='true';
    const PRODUCTO_NO_DIGITAL='false';

    protected $fillable = [
        'nombre',
        'time_prod',
        'digital',
        'base',
        'altura',
        'anchura',
        'unit_area',
        'duracion',
        'unit_dura',
        'area_id',
    ];

    protected $dates = ['deleted_at'];

    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function services(){
        return $this->hasMany(Service::class);
    }
}
