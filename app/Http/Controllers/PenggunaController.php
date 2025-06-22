<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pengguna::where('role', 'pembeli')
                       ->orderBy('created_at', 'desc')
                       ->get();
        return view('pembeli.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembeli.register');
    }

    public function create_in_admin()
    {
        return view('pembeli.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email|unique:user,email',
            'password' => 'required|min:6',
            'nama' => 'required|string|max:255',
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 6 karakter.',
            'nama.required' => 'Nama wajib diisi.',
        ]);

        try {
            // Menggunakan database transaction untuk keamanan
            DB::beginTransaction();

            $pengguna = Pengguna::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'nama' => $request->nama,
                'role' => 'pembeli',
                'last_login' => now(),
            ]);

            DB::commit();

            // Redirect berdasarkan siapa yang membuat akun
            if (session('login') && session('role') === 'admin') {
                return redirect('/user/list')->with('success', 'Pengguna berhasil ditambahkan.');
            } else {
                // Auto login untuk registrasi mandiri
                session([
                    'login' => true,
                    'email' => $request->email,
                    'role' => 'pembeli',
                    'id_user' => $pengguna->id_user,
                    'nama' => $request->nama,
                ]);

                return redirect('/pembeli/dashboard')->with('success', 'Registrasi berhasil! Selamat datang.');
            }

        } catch (\Exception $e) {
            DB::rollback();
            return back()->withInput()->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }

    /**
     * Display the specified resource with pagination and search.
     */
    public function list_data(Request $request)
    {
        $query = Pengguna::where('role', 'pembeli');

        // Fitur pencarian
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama', 'like', '%' . $search . '%')
                  ->orWhere('email', 'like', '%' . $search . '%');
            });
        }

        // Pagination dengan 10 data per halaman
        $data = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('pembeli.list', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_user)
    {
        try {
            $data = Pengguna::findOrFail($id_user);
            return view('pembeli.formUpdate', compact('data'));
        } catch (\Exception $e) {
            return redirect('/user/list')->with('error', 'Data pengguna tidak ditemukan.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:user,email,' . $request->id_user . ',id_user',
            'nama' => 'required|string|max:255',
            'password' => 'nullable|min:6',
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan pengguna lain.',
            'nama.required' => 'Nama wajib diisi.',
            'password.min' => 'Password minimal 6 karakter.',
        ]);

        try {
            DB::beginTransaction();

            $pembeli = Pengguna::findOrFail($request->id_user);

            // Update data dasar
            $updateData = [
                'email' => $request->email,
                'nama' => $request->nama,
            ];

            // Update password jika diisi
            if ($request->filled('password')) {
                $updateData['password'] = Hash::make($request->password);
            }

            $pembeli->update($updateData);

            DB::commit();

            return redirect('/user/list')->with('success', 'Data pengguna berhasil diperbarui.');

        } catch (\Exception $e) {
            DB::rollback();
            return back()->withInput()->with('error', 'Terjadi kesalahan saat memperbarui data.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            DB::beginTransaction();

            $pembeli = Pengguna::findOrFail($request->id_user);
            $pembeli->delete();

            DB::commit();

            return redirect('/user/list')->with('success', 'Data pengguna berhasil dihapus.');

        } catch (\Exception $e) {
            DB::rollback();
            return redirect('/user/list')->with('error', 'Terjadi kesalahan saat menghapus data.');
        }
    }

    /**
     * Get user statistics for dashboard
     */
    public function getUserStats()
    {
        $stats = [
            'total_pembeli' => Pengguna::where('role', 'pembeli')->count(),
            'pembeli_bulan_ini' => Pengguna::where('role', 'pembeli')
                                          ->whereMonth('created_at', now()->month)
                                          ->whereYear('created_at', now()->year)
                                          ->count(),
            'pembeli_aktif' => Pengguna::where('role', 'pembeli')
                                      ->where('last_login', '>=', now()->subDays(30))
                                      ->count(),
        ];

        return response()->json($stats);
    }

    /**
     * Show user profile
     */
    public function profile($id_user)
    {
        try {
            $data = Pengguna::findOrFail($id_user);
            return view('pembeli.profile', compact('data'));
        } catch (\Exception $e) {
            return redirect('/user/list')->with('error', 'Data pengguna tidak ditemukan.');
        }
    }

    /**
     * Update last login timestamp
     */
    public function updateLastLogin($id_user)
    {
        try {
            $pengguna = Pengguna::findOrFail($id_user);
            $pengguna->update(['last_login' => now()]);
            
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'User not found']);
        }
    }
}