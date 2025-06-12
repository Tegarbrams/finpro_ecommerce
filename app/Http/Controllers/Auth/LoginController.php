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

        // Opsi untuk fitur "Remember Me"
        $remember = $request->boolean('remember');

        // 2. Mencoba untuk melakukan otentikasi user
        if (Auth::attempt($credentials, $remember)) {
            // 3. Jika berhasil, regenerate session untuk keamanan
            $request->session()->regenerate();

            // 4. Redirect ke halaman yang dituju setelah login (default: /dashboard)
            return redirect()->intended('dashboard');
        }

        // 5. Jika gagal, kembalikan ke form login dengan pesan error
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