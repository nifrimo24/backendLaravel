<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstudianteCarrera extends Model
{
    protected $table = 'estudiantes_carreras';
    public $timestamps = false;

    protected $fillable = [
        'carrera_id', 'estudiante_id',
    ];
}
