<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMatricula extends Model
{
    protected $table = 'tipos_matricula';
    protected $primaryKey = 'id_tipo_matricula';
    public $timestamps = false;


    //Relacion 1-N con Documentos Matricula
    public function matriculas()
    {
        return $this->hasMany(
            Matricula::class,
            'tipo_matricula_id',
            'id_tipo_matricula'
        );
    }
}
