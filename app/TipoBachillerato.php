<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoBachillerato extends Model
{
    protected $table = 'tipos_bachillerato';
    protected $primaryKey = 'id_tipo_bachillerato';
    public $timestamps = false;
}
