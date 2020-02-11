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
            'USU_MAIL'     => $request->email,
            'password'  =>   $request->password
        );
       
       
        if (Auth::attempt($userdata)) {
            return redirect('/');
        }else{
            return redirect('');
         
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    
}
