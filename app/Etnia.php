<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etnia extends Model
{
    protected $table = 'etnias';
    protected $primaryKey = 'id_etnia';
    public $timestamps = false;
}
