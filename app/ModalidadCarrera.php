<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModalidadCarrera extends Model
{
    protected $table = 'modalidades_carrera';
    protected $primaryKey = 'id_modalidad_carrera';
    public $timestamps = false;

    public function carreras()
    {
        return $this->hasMany(
            Carrera::class,
            'modalidad_carrera_id',
            'id_modalidad_carrera'
        );
    }
}
