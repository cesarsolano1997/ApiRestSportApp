<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    
    protected $table = 'ciudad';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey  = 'city_id';
    protected $fillable = [
        'city_id','city_name','pais_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
     protected $hidden = [
            'city_flag' 
     ];
}
