<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pension extends Model
{
    protected $table = 'pensiones';
    protected $primaryKey = 'id_pension';
    public $timestamps = false;

    public function matriculas()
    {
        return $this->belongsToMany(
            Matricula::class,
            'pensiones_matriculas',
            'pension_id',
            'matricula_id'
        );
    }
}
