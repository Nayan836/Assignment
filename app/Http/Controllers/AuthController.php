<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\ Facades\DB;
use App\Http\Requests\StoreMemberRequest;
use App\User;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function index(){
    
        return view('register');
    }
    public function login(){
        
        return view('login');
    }
    

   public function registerSubmit(StoreMemberRequest $request)
   {
    try{
        $user = User::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "phone"=> $request->phone,
            "password"=> bcrypt($request->password),
        ]);
    }catch(Exception $e)
    {
        $user = null;
    }
    return redirect('/home');

   }
   
    
    
}
