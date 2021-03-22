<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Administrativo extends Model
{
    use Notifiable, HasApiTokens;

    protected $table = 'administrativos';
    protected $primaryKey = 'id_administrativo';
    public $timestamps = false;
    protected $rememberTokenName = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres_administrativo', 'apellidos_administrativo', 'numero_identificacion_administrativo',
        'fecha_nacimiento_administrativo', 'email_administrativo', 'celular_administrativo',
        'convencional_administrativo', 'direccion_administrativo', 'password_administrativo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password_administrativo',
    ];
}
