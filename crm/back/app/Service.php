<?php

namespace App;

use App\Item;
use App\Test;
use App\Ticket;
use App\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;
    const FORCE_TRUE = 'true';
    const FORCE_FALSE = 'false';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'nombre',
        'cantidad',
        'force_individual',
        'package_id',
        'test_id',
        'item_id',
    ];

    public function item(){
        return $this->belongsTo(Item::class);
    }

    public function test(){
        return $this->belongsTo(Test::class);
    }

    public function package(){
        return $this->belongsTo(Package::class);
    }

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}
