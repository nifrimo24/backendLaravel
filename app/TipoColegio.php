<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoColegio extends Model
{
    protected $table = 'tipos_colegio';
    protected $primaryKey = 'id_tipo_colegio';
    public $timestamps = false;
}
