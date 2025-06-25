<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pengguna::where('role', 'user')
                       ->orderBy('created_at', 'desc')
                       ->get();
        return view('pembeli.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register');
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
        // FIX: Validasi yang benar sesuai dengan field form
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed', // tambahkan confirmed untuk password_confirmation
            'name' => 'required|string|max:255', // ganti dari 'nama' ke 'name'
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah terdaftar.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 6 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'name.required' => 'Nama wajib diisi.',
        ]);

        try {
            // Menggunakan database transaction untuk keamanan
            DB::beginTransaction();

            // FIX: Gunakan field 'name' bukan 'nama'
            $pengguna = Pengguna::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'name' => $request->name, // FIX: ganti dari $request->nama
                'role' => 'user',  // Sesuai dengan enum di database
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
                    'role' => 'user',
                    'level_user' => 'user',  // Untuk kompatibilitas dengan middleware
                    'id_user' => $pengguna->id,
                    'nama' => $request->name, // FIX: gunakan $request->name
                ]);

                return redirect('/dashboard')->with('success', 'Registrasi berhasil! Selamat datang.');
            }

        } catch (\Exception $e) {
            DB::rollback();
            
            // FIX: Tambahkan log error untuk debugging
            Log::error('Registration Error: ' . $e->getMessage());
            
            return back()->withInput()->with('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource with pagination and search.
     */
    public function list_data(Request $request)
    {
        $query = Pengguna::where('role', 'user');

        // Fitur pencarian
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
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
    public function edit($id)
    {
        try {
            $data = Pengguna::findOrFail($id);
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
            'email' => 'required|email|unique:users,email,' . $request->id_user . ',id',
            'name' => 'required|string|max:255', // FIX: ganti dari 'nama'
            'password' => 'nullable|min:6',
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan pengguna lain.',
            'name.required' => 'Nama wajib diisi.',
            'password.min' => 'Password minimal 6 karakter.',
        ]);

        try {
            DB::beginTransaction();

            $pembeli = Pengguna::findOrFail($request->id_user);

            // Update data dasar
            $updateData = [
                'email' => $request->email,
                'name' => $request->name, // FIX: ganti dari nama
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
            'total_pembeli' => Pengguna::where('role', 'user')->count(),
            'pembeli_bulan_ini' => Pengguna::where('role', 'user')
                                          ->whereMonth('created_at', now()->month)
                                          ->whereYear('created_at', now()->year)
                                          ->count(),
            'pembeli_aktif' => Pengguna::where('role', 'user')
                                      ->where('updated_at', '>=', now()->subDays(30))
                                      ->count(),
        ];

        return response()->json($stats);
    }

    /**
     * Show user profile
     */
    public function profile($id)
    {
        try {
            $data = Pengguna::findOrFail($id);
            return view('pembeli.profile', compact('data'));
        } catch (\Exception $e) {
            return redirect('/user/list')->with('error', 'Data pengguna tidak ditemukan.');
        }
    }

    /**
     * Update last login timestamp
     */
    public function updateLastLogin($id)
    {
        try {
            $pengguna = Pengguna::findOrFail($id);
            $pengguna->update(['updated_at' => now()]);
            
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'User not found']);
        }
    }
}