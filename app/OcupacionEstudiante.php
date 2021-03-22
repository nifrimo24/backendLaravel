<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OcupacionEstudiante extends Model
{
    protected $table = 'ocupaciones_estudiantes';
    protected $primaryKey = 'id_ocupacion_estudiante';
    public $timestamps = false;
}
