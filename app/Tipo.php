<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'Tipo';
    protected $primaryKey = 'TIP_ID';
    public $timestamps = false;

    protected $fillable = [
        'TIP_ID', 'TIP_DESCRIPCION'
    ];
}

