<?php

namespace App\Http\Controllers;
use App\Pais;
class PaisController extends Controller
{
      public function index(){
          
         $pais = Pais::where('pais_flag','=',1)->get();
         return response()->json($pais);
                
    }
    
}
