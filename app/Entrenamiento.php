<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Entrenamiento extends Model
{
    
    protected $table = 'entrenamiento';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey  = 'entr_id';
    protected $fillable = [
        'user_id','entr_date'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
     protected $hidden = [
            'entr_id','entr_flag' 
     ];
}
