<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ControllerAut extends Controller
{
    public function showLogin()
    {
        return view('autenticacion');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticación exitosa
            return redirect()->route('dashboard');
        }

        // Autenticación fallida
        return redirect()->route('error')->with('error', 'Credenciales incorrectas');
    }

}
