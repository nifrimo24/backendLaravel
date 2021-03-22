<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pagos';
    protected $primaryKey = 'id_pago';
    public $timestamps = false;

    //Relacion 1-N con Matriculas
    public function matriculas()
    {
        return $this->belongsToMany(
            Matricula::class,
            'pagos_matriculas',
            'pago_id',
            'matricula_id'
        );
    }
}
