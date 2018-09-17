<?php

namespace App\Http\Controllers;

class CiudadController extends Controller
{
  public function index(){
      
      $ciudad=Ciudad:where('city_flag','=',1)->get();
      
      return response()->json($ciudad);
  }
}
