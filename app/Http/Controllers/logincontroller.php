<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function index ()
    {
        return view("login.index");
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'email wajib di isi',
            'password.required'=>'password wajib di isi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password 
        ];

        if(Auth::attempt($infologin)){
            return 'sukses';
        } else {
            return 'gagal';
        }
    }
}
