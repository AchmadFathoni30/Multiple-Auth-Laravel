<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    public function viewLogin()
    {
        return view('FormLogin');
    }

    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'operator') {
                return redirect('/adminOperator');
            } elseif (Auth::user()->role == 'marketing') {
                return redirect('/adminMarketing');
            } elseif (Auth::user()->role == 'keuangan') {
                return redirect('/adminKeuangan');
            }
        } else {
            return redirect('')->withErrors('Email dan Password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
