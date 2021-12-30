<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  
    public function register(Request $request){
       return User::create([
        'name' => $request-> input('name'),
        'email' => $request-> input('email'),
        'password' =>Hash::make($request-> input('password'))
       ]);
    }
    public function user(){
       return 'Authenticated user';
    }

    public function login(){
        
    }

}
