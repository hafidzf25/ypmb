<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginAdminController extends Controller
{
    protected $redirectTo = '/admin/dashboard';

    public function __construct()
    {
        $this->middleware('guest:adminMiddle')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard('adminMiddle');
    }

    public function loginForm()
    {
        if (Auth::guard('adminMiddle')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.sign-in');
    }

    public function signin(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|exists:t_admin,username', // Pastikan kolom sesuai
            'password' => 'required'
        ]);

        // Menggunakan Auth::guard untuk login
        if (Auth::guard('adminMiddle')->attempt([
            'username' => $credentials['username'],
            'password' => $credentials['password']
        ], $request->filled('remember'))) {
            // Regenerasi sesi untuk keamanan tambahan
            $request->session()->regenerate();
            return redirect()->intended($this->redirectTo);
        }

        // Jika login gagal, kirim pesan error
        throw ValidationException::withMessages([
            'username' => __('auth.failed'),
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('adminMiddle')->logout();

        // Invalidate sesi untuk keamanan tambahan
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.sign-in');
    }
}
