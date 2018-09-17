<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $table = 'usuario';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey  = 'user_id';
    protected $fillable = [
        'user_id','user_name', 'user_fecnac, ','updated_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
     protected $hidden = [
            'user_pass','user_name','user_flag','created_at'
     ];
}
