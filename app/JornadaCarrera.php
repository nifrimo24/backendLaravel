<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JornadaCarrera extends Model
{
    protected $table = 'jornadas_carrera';
    protected $primaryKey = 'id_jornada_carrera';
    public $timestamps = false;

    public function carreras()
    {
        return $this->hasMany(
            Carrera::class,
            'jornada_carrera_id',
            'id_jornada_carrera'
        );
    }
}
