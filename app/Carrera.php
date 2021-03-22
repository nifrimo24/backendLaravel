<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carreras';
    protected $primaryKey = 'id_carrera';
    public $timestamps = false;

    public function modalidadesCarrera()
    {
        return $this->belongsTo(
            ModalidadCarrera::class,
            'modalidad_carrera_id',
            'id_modalidad_carrera'
        );
    }

    public function titulosCarrera()
    {
        return $this->belongsTo(
            TituloCarrera::class,
            'titulo_carrera_id',
            'id_titulo_carrera'
        );
    }

    public function jornadasCarrera()
    {
        return $this->belongsTo(
            JornadaCarrera::class,
            'jornada_carrera_id',
            'id_jornada_carrera'
        );
    }

    public function tiposCarrera()
    {
        return $this->belongsTo(
            TipoCarrera::class,
            'tipo_carrera_id',
            'id_tipo_carrera'
        );
    }

    //Relacion 1-N con Estudiantes Carreras
    public function estudiantesCarrera()
    {
        return $this->belongsToMany(
            User::class,
            'estudiantes_carreras',
            'carrera_id',
            'estudiante_id'
        );
    }

    public function asignaturasCarrera()
    {
        return $this->belongsToMany(
            Asignatura::class,
            'asignaturas_cursos_carreras',
            'carrera_id',
            'asignatura_id'
        );
    }

    public function cursosCarrera()
    {
        return $this->belongsToMany(
            Curso::class,
            'asignaturas_cursos_carreras',
            'carrera_id',
            'curso_id'
        );
    }
}
