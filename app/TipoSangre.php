<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoSangre extends Model
{
    protected $table = 'tipos_sangre';
    protected $primaryKey = 'id_tipo_sangre';
    public $timestamps = false;
}
