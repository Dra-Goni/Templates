<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Index()
    {
        return view("login.index");
    }

    public function Login(Request $request)
    {
        $userdata = array(
            'USU_MAIL'     => $request->correo,
            'password'  =>   $request->password
        );
       
        
        if (Auth::attempt($userdata)) {
           
            return redirect('/menu');
        }else{
           
            return redirect('/')->with('popup', 'open');
         
        }
    }
}
