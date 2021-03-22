<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoMatricula extends Model
{
    protected $table = 'estados_matricula';
    protected $primaryKey = 'id_estado_matricula';
    public $timestamps = false;

    //Relacion 1-N con Documentos Matricula
    public function matriculas()
    {
        return $this->hasMany(
            Matricula::class,
            'estado_matricula_id',
            'id_estado_matricula'
        );
    }
}
