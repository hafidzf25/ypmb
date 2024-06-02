<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User; // Ensure you import the User model

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Check if the user is active
        $user = User::where('email', $credentials['email'])->first();

        if ($user && $user->active == 0) {
            Session::flash('error', 'Akun Anda tidak aktif. Lakukan verifikasi akun');
            return redirect('/login');
        }

        if (Auth::attempt($credentials)) {
            return redirect('/');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function edit_profil() {
        return view('editprofil');
    }
} redirect('/login');