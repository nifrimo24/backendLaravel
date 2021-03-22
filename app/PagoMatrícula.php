<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PagoMatrícula extends Model
{
    protected $table = 'pagos_matriculas';
    public $timestamps = false;

    protected $fillable = [
        'matricula_id', 'pago_id',
        'fecha_pago_matricula', 'comprobante_pago',
        'cantidad_pago',
    ];
}
