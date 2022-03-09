<?php

namespace App;

use App\Package;
use App\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'nombre',
        'instrucciones',
        'estructura',
    ];

    public function packages(){
        return $this->hasMany(Package::class);
    }

    public function services(){
        return $this->hasMany(Service::class);
    }
}
