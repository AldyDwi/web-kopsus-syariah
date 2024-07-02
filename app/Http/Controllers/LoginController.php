<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // $credentials = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);

        // if (!empty($credentials)) {
        //     $user = $credentials;
        //     Session::put('user', $user);

        //     return redirect()->route('admin.index');
        // } else {
        //     Alert::error('Login Gagal', 'Akun dan password salah');
        //     return back();
        // }


        // $credentials = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|min:8'
        // ]);
    
        // if (Auth::attempt($credentials)) {
        //     // User autentikasi berhasil, redirect ke halaman tujuan
        //     return redirect()->intended('admin/admin');
        // }
    
        // return back()->withErrors([
        //     Alert::error('Login Gagal', 'Akun dan password salah'),
        // ]);
        // Validasi input login


        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/admin');
        }

        Alert::error('Login Gagal', 'Akun dan password salah');
        return back();
    }

    public function logout(Request $request)
    {
        // Session::forget('user');
        // Alert::success('Logged out', 'You have been successfully logged out.');
        // return redirect()->route('home');
        Auth::logout();

        return redirect('/');
    }
}

