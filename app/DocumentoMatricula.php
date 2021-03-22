<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoMatricula extends Model
{
    protected $table = 'documentos_matricula';
    protected $primaryKey = 'id_documento_matricula';
    public $timestamps = false;
}
