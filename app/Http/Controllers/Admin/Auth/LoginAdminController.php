<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use App\Models\Admin;

class LoginAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function index(){
        if(Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'username' => $request->username,
            'password' => $request->password  
        ];

        if (Auth::guard('admin')->attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard'); // Mengarahkan ke halaman dashboard admin setelah berhasil masuk
        } else {
            return redirect()->route('admin.login')->with('failed', 'Username atau Password salah!');
        }        
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Berhasil Logout!');
    }
}
