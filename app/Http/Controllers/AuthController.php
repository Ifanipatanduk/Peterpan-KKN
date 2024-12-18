<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Tampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function dashboardAnggota()
    {
        return view('anggota.dashboardAnggota');
    }

    public function dashboardDosen()
    {
        return view('dosen.dashboardDosen');
    }

    
    public function dashboardAdmin()
    {
        return view('admin.dashboardAdmin');
    }


    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        // Coba autentikasi
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate(); // Regenerate session for security
            $user = Auth::user();
            // Redirect berdasarkan role
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.dashboardadmin');
                case 'dosen':
                    return redirect()->route('dosen.dashboardDosen');
                case 'ketua':
                    return redirect()->route('ketua.dashboardKetua');
                case 'mahasiswa':
                    return redirect()->route('anggota.dashboardAnggota');                    
                default:
                    Auth::logout();
                    return redirect()->route('login')->withErrors(['login' => 'Role tidak dikenali.']);
            }
        }

        // Jika gagal, kembali ke form login dengan error
        return back()->withErrors(['login' => 'Email atau password salah.']);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
