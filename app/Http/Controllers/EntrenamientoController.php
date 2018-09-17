<?php

namespace App\Http\Controllers;

use App\Entrenamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EntrenamientoController extends Controller
{
   
    public function createEntr($user_id,$entr_date){        
                  
          try {
                $entr = Entrenamiento::insert([
                'user_id' => $user_id,
                'entr_date' => $entr_date
                     ]);            
                $getentr = Entrenamiento::All()->last();
                return response()->json($getentr, 200);

            } catch (ModelNotFoundException $e) {
                return response()->json(['error' => 'No content'], 406);
            }
    }     
}
