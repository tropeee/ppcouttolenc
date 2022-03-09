<?php

namespace App;

use App\Item;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Area extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nombre',
    ];

    public function teams(){
        return $this->hasMany(User::class);
    }

    public function items(){
        return $this->hasMany(Item::class);
    }
}
