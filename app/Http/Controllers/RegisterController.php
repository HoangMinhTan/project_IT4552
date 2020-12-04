<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('login.register');
    }

    public function Pregister(Request $request){
        if (\DB::table('users')->where('email',$request['email'])->first() == NULL)
        {
            \DB::table('users')->insert([
                'name' => 'admin',
                'email' => $request['email'],
                'password' => bcrypt($request['pass'])
            ]);
            return redirect('login');
        }
        else 
            return redirect('register');
    }
}
