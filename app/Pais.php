<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    
    protected $table = 'pais';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey  = 'pais_id';
    protected $fillable = [
        'pais_id','pais_name'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
     protected $hidden = [
            'pais_id','pais_flag' 
     ];
}
