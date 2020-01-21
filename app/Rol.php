<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'ROL';
    protected $primaryKey = 'ROL_ID';
    public $timestamps = false;

    protected $fillable = [
        'ROL_ID', 'ROL_DESCRIPCION'
    ];
}
