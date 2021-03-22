<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstudianteMatricula extends Model
{
    protected $table = 'estudiantes_matriculas';
    public $timestamps = false;

    protected $fillable = [

        'estudiante_id',
        'matricula_id',

    ];
}
