<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TituloAcademico extends Model
{
    protected $table = 'titulos_academicos';
    protected $primaryKey = 'id_titulo_academico';
    public $timestamps = false;

    protected $fillable = [
        'descripcion_titulo_academico',

    ];
}
