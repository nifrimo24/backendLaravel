<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $primaryKey = 'id_curso';
    public $timestamps = false;

    public function matriculas()
    {
        return $this->hasMany(
            Matricula::class,
            'curso_id',
            'id_curso'
        );
    }

    public function ciclosAcademicoCurso()
    {
        return $this->belongsTo(
            CicloAcademico::class,
            'ciclo_academico_id',
            'id_ciclo_academico'
        );
    }

    public function paralelosCurso()
    {
        return $this->belongsTo(
            Paralelo::class,
            'paralelo_id',
            'id_paralelo'
        );
    }

    public function asignaturasCurso()
    {
        return $this->belongsToMany(
            Asignatura::class,
            'asignaturas_cursos_carreras',
            'curso_id',
            'asignatura_id'
        );
    }

    public function carrerasCurso()
    {
        return $this->belongsToMany(
            Carrera::class,
            'asignaturas_cursos_carreras',
            'curso_id',
            'carrera_id'
        );
    }
}
