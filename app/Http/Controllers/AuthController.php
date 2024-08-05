<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login',[
            'title' => 'Login Admin Rumah Singgah'
        ]);
    }

    public function check(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect()->route('pendaftaran');
        }
        return back()->with('error','Email dan password tidak sesuai');
    }
}
