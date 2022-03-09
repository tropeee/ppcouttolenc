<?php

namespace App;

use App\Ticket;
use Laravel\Passport\HasApiTokens;
use App\Transformers\UserTransformer;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable,SoftDeletes;

    const USUARIO_VERIFICADO = '1';
    const USUARIO_NO_VERIFICADO = '0';

    const USUARIO_ADMINISTRADOR = 'true';
    const USUARIO_REGULAR = 'false';

    const USUARIO_CLIENTE = 'customer';
    const USUARIO_EQUIPO = 'team';

    protected $table = 'users';
    protected $dates = ['deleted_at'];

    public $transformer = UserTransformer::class;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'verified',
        'verification_token',
        'admin',

        'foto',
        'cargo',
        'rol',
        'direccion',
        'telefono',

        'tipo',
        'facebook',
        'instagram',
        'twitter',
        'company_id',
        'area_id',
    ];

    public function setNameAttribute($valor){
        $this->attributes['name'] = strtolower($valor);
    }
    public function getNameAttribute($valor){
        return ucwords($valor);
    }

    public function setEmailAttribute($valor){
        $this->attributes['email'] = strtolower($valor);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'verification_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isVerified()
    {
        return $this->verified == User::USUARIO_VERIFICADO;
    }

    public function isAdmin()
    {
        return $this->admin == User::USUARIO_ADMINISTRADOR;
    }

    public function isClient()
    {
        return $this->tipo == User::USUARIO_CLIENTE;
    }

    public static function generateVerificationToken(){
        return str_random(40);
    }

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}
