<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CicloAcademico extends Model
{
    protected $table = 'ciclos_academicos';
    protected $primaryKey = 'id_ciclo_academico';
    public $timestamps = false;

    public function cursos()
    {
        return $this->hasMany(
            AsignaturaCurso::class,
            'ciclo_academico_id',
            'id_ciclo_academico'
        );
    }
}
