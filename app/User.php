<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'USUARIO';
    protected $primaryKey = 'USU_ID';
    public $incrementing=false;
    public $timestamps = false;

    protected $fillable = [
       'USU_ID','USU_MAIL', 'USU_PASSWORD', 'USU_ROL',
    ];

    protected $hidden = [
        'USU_PASSWORD' 
    ];

    public function getAuthPassword()
    {
        return $this->USU_PASSWORD;
    }

    public function setAttribute($key, $value)
{
    $isRememberTokenAttribute = $key == $this->getRememberTokenName();

    if( ! $isRememberTokenAttribute )
    {
        parent::setAttribute($key, $value);
    }
}

}
