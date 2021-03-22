<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelFormacion extends Model
{
    protected $table = 'niveles_formacion';
    protected $primaryKey = 'id_nivel_formacion';
    public $timestamps = false;
}
