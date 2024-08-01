<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index(){
        return view("pages/sesi/index");
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib Diisi',
            'password.required' => 'Password wajib Diisi',
        ]);

        $infologin = [
            'email' =>$request->email,
            'password' =>$request->password,
        ];

        if(Auth :: attempt($infologin)) {
            //jika sukses
            return 'sukses';
        } else {
            return 'gagal';
        }
    }
}
