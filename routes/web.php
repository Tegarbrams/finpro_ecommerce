<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PenggunaController;

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

// Authentication Routes
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

// Registration Routes
Route::get('/register', [PenggunaController::class, 'create'])->name('register');
Route::post('/register', [PenggunaController::class, 'store']);

// Other public routes
Route::get('/jual', function () {
    return view('jual');
});

Route::get('/testes', function () {
    return view('testes');
});

Route::get('/tambah', function () {
    return view('tambah');
});

// Routes yang memerlukan login
Route::middleware(['check.login'])->group(function () {
    
    // Dashboard routes
    Route::get('/dashboard', function () {
        // Cek role untuk redirect yang tepat
        if (session('role') === 'admin') {
            return redirect('/admin/dashboard');
        }
        return view('dashboard');
    });
    
    // Admin routes
    Route::middleware(['check.admin'])->group(function () {
        Route::get('/admin/dashboard', function () {
            return view('admin.dashboard');
        });

        // User management routes
        Route::get('/user/list', [PenggunaController::class, 'list_data']);
        Route::get('/user/create', [PenggunaController::class, 'create_in_admin']);
        Route::post('/user/store', [PenggunaController::class, 'store']);
        Route::get('/user/edit/{id}', [PenggunaController::class, 'edit']);
        Route::post('/user/update', [PenggunaController::class, 'update']);
        Route::post('/user/delete', [PenggunaController::class, 'destroy']);
        Route::get('/user/stats', [PenggunaController::class, 'getUserStats']);
        Route::get('/user/profile/{id}', [PenggunaController::class, 'profile']);
        Route::post('/user/update-login/{id}', [PenggunaController::class, 'updateLastLogin']);
    });
});

Route::get('/dashboardAdmin', function () {
    return view('/Admin/dashboardAdmin');
});

Route::get('/listacc', function () {
    return view('/Admin/listacc');
});

Route::get('/tambah', function () {
    return view('/Admin/tambah');
});