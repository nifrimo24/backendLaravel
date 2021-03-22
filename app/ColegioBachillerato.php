<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColegioBachillerato extends Model
{
    protected $table = 'colegios_tipos_bachillerato';
    public $timestamps = false;

    protected $fillable = [

        'tipo_bachillerato_id',
        'colegio_id',

    ];
}
