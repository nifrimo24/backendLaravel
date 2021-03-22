<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'asignaturas';
    protected $primaryKey = 'id_asignatura';
    public $timestamps = false;

    public function carrerasAsignatura()
    {
        return $this->belongsToMany(
            Carrera::class,
            'asignaturas_cursos_carreras',
            'asignatura_id',
            'carrera_id'
        );
    }

    public function cursosAsignatura()
    {
        return $this->belongsToMany(
            Curso::class,
            'asignaturas_cursos_carreras',
            'asignatura_id',
            'curso_id'
        );
    }
}
