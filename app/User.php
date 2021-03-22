<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    protected $table = 'estudiantes';
    protected $primaryKey = 'id_estudiante';
    public $timestamps = false;
    protected $rememberTokenName = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres_estudiante', 'apellidos_estudiante', 'numero_identificacion_estudiante',
        'fecha_nacimiento_estudiante', 'email_estudiante', 'celular_estudiante',
        'convencional_estudiante', 'direccion_estudiante', 'password_estudiante',
        'edad', 'tipo_sangre_id', 'etnia_id',
        'tipo_bachillerato_id', 'nivel_formacion_estudiante_id', 'ocupacion_estudiante_id',
        'educacion_superior',
        'titulo_academico_id',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password_estudiante',
    ];

    //Relacion 1-N con Estudiantes Carreras
    public function carreras()
    {
        return $this->belongsToMany(
            Carrera::class,
            'estudiantes_carreras',
            'estudiante_id',
            'carrera_id'
        );
    }
}
