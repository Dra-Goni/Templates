<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'CASO';
    protected $primaryKey = 'CAS_ID';
    public $timestamps = false;

    protected $fillable = [
        'CAS_ID', 'CAS_TIPO','CAS_ESTADO','CAS_FECHA_INI','CAS_FECHA_CIERRE','CAS_USUARIO'
    ];
}
