<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\Admin\ProductController;


// ===== PUBLIC ROUTES =====
// Home routes
Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/moba', function () {
    return view('moba');
});

Route::get('/detailProduk', function () {
    return view('detailProduk');
});

Route::get('/listAkun', function () {
    return view('listAkun');
});

Route::get('/dataListAkun', function () {
    return view('dataListAkun');
});

Route::get('/jual', function () {
    return view('jual');
});

Route::get('/testes', function () {
    return view('testes');
});
Route::get('/pembayaran', function () {
    return view('pembayaran');
});
Route::get('/profil', function () {
    return view('profil');
});

// ===== AUTHENTICATION ROUTES (PUBLIC) =====
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

// Registration Routes
Route::get('/register', [PenggunaController::class, 'create'])->name('register');
Route::post('/register', [PenggunaController::class, 'store']);

// ===== PROTECTED ROUTES (PERLU LOGIN) =====
Route::middleware(['cek.login'])->group(function () {

    // Dashboard routes
    Route::get('/dashboard', function () {
        // Cek role untuk redirect yang tepat
        if (session('role') === 'admin') {
            return redirect('/admin/dashboard');
        }
        return view('index');
    });

    // User routes (untuk user biasa)
    Route::get('/tambah', function () {
        return view('tambah');
    });

    // ===== ADMIN ROUTES =====
    Route::middleware(['check.admin'])->group(function () {

        // Admin Dashboard
        Route::get('/admin/dashboard', function () {
            return view('admin.dash2');
        });

        // Alternative admin dashboard route (untuk kompatibilitas)
        Route::get('/dashboardAdmin', function () {
            return view('Admin.dash2');
        });

        // Admin pages

        //(menggunakan controller untuk ambil data dari database)
        Route::get('/admin/listacc', [ProductController::class, 'index'])->name('admin.produk.index');

        // Admin pages
        Route::get('/admin/bayar', function () {
            return view('Admin.bayar');
        });
        

        Route::get('/admin/tambah', [ProductController::class, 'create'])->name('admin.produk.tambah');
        Route::post('/admin/tambah', [ProductController::class, 'store'])->name('admin.produk.store');


        Route::get('/admin/register', function () {
            return view('Admin.registerAdmin');
        });

        // controller untuk tambah
        // Route::get('/tambah-produk', [ControllersProductController::class, 'create'])->name('products.create');
        // Route::post('/tambah-produk', [ControllersProductController::class, 'store'])->name('products.store');

        // User Management Routes (Admin only)
        Route::prefix('admin/user')->group(function () {
            Route::get('/list', [PenggunaController::class, 'list_data'])->name('admin.user.list');
            Route::get('/create', [PenggunaController::class, 'create_in_admin'])->name('admin.user.create');
            Route::post('/store', [PenggunaController::class, 'store'])->name('admin.user.store');
            Route::get('/edit/{id}', [PenggunaController::class, 'edit'])->name('admin.user.edit');
            Route::post('/update', [PenggunaController::class, 'update'])->name('admin.user.update');
            Route::post('/delete', [PenggunaController::class, 'destroy'])->name('admin.user.delete');
            Route::get('/stats', [PenggunaController::class, 'getUserStats'])->name('admin.user.stats');
            Route::get('/profile/{id}', [PenggunaController::class, 'profile'])->name('admin.user.profile');
            Route::post('/update-login/{id}', [PenggunaController::class, 'updateLastLogin'])->name('admin.user.update-login');
        });
    });
});

// ===== LEGACY ROUTES (Untuk kompatibilitas - bisa dihapus jika tidak digunakan) =====
// Route::get('/listacc', function () {
//     return view('/Admin/listacc');
// });

// Route::get('/registerAdmin', function () {
//     return view('/Admin/registerAdmin');
// });