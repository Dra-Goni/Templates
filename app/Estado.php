<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'ESTADO';
    protected $primaryKey = 'EST_ID';
    public $timestamps = false;

    protected $fillable = [
        'EST_ID', 'EST_DESCRIPCION'
    ];
}
