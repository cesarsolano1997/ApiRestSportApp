<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Dentrenamiento extends Model
{
    
    protected $table = 'dentrenamiento';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey  = 'dentr_id';
    protected $fillable = [
        'entr_id','dentr_date','dentr_step'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
     protected $hidden = [
            'dentr_flag' 
     ];
}
