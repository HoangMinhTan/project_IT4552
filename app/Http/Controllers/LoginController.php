<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }    

    public function Plogin(Request $request){
        $email = $request['email'];
        $password = $request['pass'];

        if (Auth::attempt(['email' => $email, 'password' => $password]))
            return redirect('shop');
        else
            return redirect('login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

}
