<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matriculas';
    protected $primaryKey = 'id_matricula';
    public $timestamps = false;

    protected $fillable = [

        'tipo_matricula_id',
        'estado_matricula_id',
        'periodo_academico_id',
        'curso_id',
        'fecha_matricula',
        'costo_matricula',
        'valor_cancelado',
        'valor_pendiente',
        'carta_compromiso',

    ];

    //Relacion 1-N con usuarios
    public function estadosMatricula()
    {
        return $this->belongsTo(
            EstadoMatricula::class,
            'estado_matricula_id',
            'id_estado_matricula'
        );
    }

    public function pagosMatricula()
    {
        return $this->belongsToMany(
            Pago::class,
            'pagos_matriculas',
            'matricula_id',
            'pago_id'
        );
    }

    public function pensionesMatricula()
    {
        return $this->belongsToMany(
            Pago::class,
            'pensiones_matriculas',
            'matricula_id',
            'pension_id'
        );
    }

    //Relacion 1-N con usuarios
    public function tiposMatricula()
    {
        return $this->belongsTo(
            TipoMatricula::class,
            'tipo_matricula_id',
            'id_tipo_matricula'
        );
    }

    public function cursosMatricula()
    {
        return $this->belongsTo(
            AsignaturaCurso::class,
            'curso_id',
            'id_curso'
        );
    }
}
