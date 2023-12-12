<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registercontroller extends Controller
{
    public function index ()
    {
        return view("register.index");
    }

    public function register(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
            'konfirmasi password'=>'required'
        ],[
            'email.required'=>'emal wajib di isi',
            'password.required'=>'password wajib di isi',
            'konfirmasi password.required'=>'password wajib di isi',
        ]);

        $inforegister = [
            'email'=>$request->email,
            'password'=>$request->password,
            'konfiramsi password'=>$request->password 
        ];

        if(Auth::attempt($inforegister)){
            return 'sukses';
        } else {
            return 'gagal';
        }
    }

    public function store()
    {
        return request()->all;
    }
    
}
