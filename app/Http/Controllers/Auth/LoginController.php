<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Menampilkan halaman form login.
     */
    public function create()
    {
        return view('login');
    }

    /**
     * Menangani permintaan otentikasi (proses login).
     */
   

    public function store(Request $request)
    {
        // 1. Validasi input dari form
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        // 2. Ambil opsi "Remember Me"
        $remember = $request->boolean('remember');
    
        // 3. Mencoba untuk melakukan otentikasi user
        if (Auth::attempt($credentials, $remember)) {
            // 4. Jika berhasil, regenerate session untuk keamanan
            $request->session()->regenerate();
            
            $user = Auth::user();
            
            // 5. Redirect berdasarkan role
            if ($user->isAdmin()) {
                return redirect()->intended('/admin/dashboard')
                    ->with('success', 'Selamat datang, Admin!');
            } else {
                return redirect()->intended('/index')
                    ->with('success', 'Selamat datang!');
            }
        }
    
        // 6. Jika gagal, throw ValidationException
        throw ValidationException::withMessages([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ]);
    }

    /**
     * Menangani proses logout user.
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}