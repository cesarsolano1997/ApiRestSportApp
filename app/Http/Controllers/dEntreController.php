<?php

namespace App\Http\Controllers;

use App\Dentrenamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class dEntreController extends Controller
{
   
    public function createDentr($entr_id,$dentr_date,$dentr_step){        
         try {
                $dentr = Dentrenamiento::insert([
                'entr_id' => $entr_id,
                'dentr_date' => $dentr_date,
                'dentr_step' => $dentr_step
                     ]);            
                $getdentr = Dentrenamiento::All()->last();
                return response()->json($getdentr, 200);

            } catch (ModelNotFoundException $e) {
                return response()->json(['error' => 'No content'], 406);
            }
    }     
}
