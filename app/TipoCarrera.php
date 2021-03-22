<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCarrera extends Model
{
    protected $table = 'tipos_carrera';
    protected $primaryKey = 'id_tipo_carrera';
    public $timestamps = false;

    public function carreras()
    {
        return $this->hasMany(
            Carrera::class,
            'tipo_carrera_id',
            'id_tipo_carrera'
        );
    }
}
