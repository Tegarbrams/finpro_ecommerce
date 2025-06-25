<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use Illuminate\Http\Request;
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
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 6 karakter.',
        ]);

        // Cari user berdasarkan email
        $user = Pengguna::where('email', $request->email)->first();

        // Cek apakah user ada dan password benar
        if ($user && Hash::check($request->password, $user->password)) {
            // Update last login - tambahkan kolom ini jika belum ada
            $user->update(['updated_at' => now()]);

            // Set session manual (sesuaikan dengan field database)
            session([
                'login' => true,
                'email' => $user->email,
                'role' => $user->role,
                'level_user' => $user->role,  // Untuk kompatibilitas dengan middleware
                'id_user' => $user->id,
                'nama' => $user->name,
            ]);

            // Regenerate session untuk keamanan
            $request->session()->regenerate();

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
        // Clear semua session
        $request->session()->flush();
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
            case 'user':
            case 'pembeli':
                return redirect()->intended('/dashboard');
            default:
                return redirect('/login')->with('error', 'Role user tidak valid.');
        }
    }
}