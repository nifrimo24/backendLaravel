<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    protected $table = 'colegios';
    protected $primaryKey = 'id_colegio';
    public $timestamps = false;

    protected $fillable = [
        'descripcion_colegio', 'tipo_colegio_id',
    ];
}
