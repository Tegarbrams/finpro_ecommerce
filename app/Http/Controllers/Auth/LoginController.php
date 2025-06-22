<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
     * Proses login (method yang dipanggil dari route POST /login)
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Regenerate session untuk keamanan
            $request->session()->regenerate();

            // Simpan data tambahan ke session jika diperlukan
            session([
                'login' => true,
                'email' => $user->email,
                'role' => $user->role,
                'id_user' => $user->id,
                'nama' => $user->name,
            ]);

            // Redirect berdasarkan role user
            return $this->redirectBasedOnUserRole($user->role);
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    /**
     * Logout user
     */
    public function destroy(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Berhasil logout.');
    }

    /**
     * Helper method untuk redirect berdasarkan role
     */
    private function redirectBasedOnUserRole($role)
    {
        switch ($role) {
            case 'admin':
                return redirect()->intended('/admin/dashboard');
            case 'pembeli':
                return redirect()->intended('/dashboard');
            default:
                return redirect('/login')->with('error', 'Role user tidak valid.');
        }
    }
}