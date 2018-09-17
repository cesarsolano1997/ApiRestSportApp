<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
    public function index(){
        
        $user = User::all();  
        
        return response()->json($user);
    }
    
    public function getUser($name,$pass){        
          
          try {
               $user = User::where('user_user','=',$name)
                     ->where('user_pass','=',$pass)
                     ->get();

                return response()->json($user, 200);

            } catch (ModelNotFoundException $e) {
                return response()->json(['error' => 'No content'], 406);
            }
    }        
    
    public function createUser($name,$pass){
        
        $user = User::create([
            'user_user' => $name,
            'user_name' => 'Admin',
            'user_pass' => $pass
        ]);
        
    return response()->json($user,200);
    }   
    
}
