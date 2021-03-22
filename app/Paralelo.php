<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paralelo extends Model
{
    protected $table = 'paralelos';
    protected $primaryKey = 'id_paralelo';
    public $timestamps = false;

    public function cursos()
    {
        return $this->hasMany(
            AsignaturaCurso::class,
            'paralelo_id',
            'id_paralelo'
        );
    }
}
