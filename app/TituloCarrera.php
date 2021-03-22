<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TituloCarrera extends Model
{
    protected $table = 'titulos_carrera';
    protected $primaryKey = 'id_titulo_carrera';
    public $timestamps = false;

    public function carreras()
    {
        return $this->hasMany(
            Carrera::class,
            'titulo_carrera_id',
            'id_titulo_carrera'
        );
    }
}
