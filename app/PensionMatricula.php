<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PensionMatricula extends Model
{
    protected $table = 'pagos_matriculas';
    public $timestamps = false;

    protected $fillable = [
        'matricula_id', 'pension_id',
        'fecha_pago_matricula', 'comprobante_pension',
        'cantidad_pension', 'estado_pension',
    ];
}
