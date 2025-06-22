<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Other routes
Route::get('/jual', function () {
    return view('jual');
});

Route::get('/testes', function () {
    return view('testes');
});

Route::get('/admin/register', function () {
    return view('admin/register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth'); // Tambahkan middleware auth untuk proteksi

Route::get('/tambah', function () {
    return view('tambah');
});

// User management routes (untuk admin)
Route::middleware(['auth'])->group(function () {
    Route::get('/user/list', [PenggunaController::class, 'index']);
    Route::get('/user/create', [PenggunaController::class, 'create_in_admin']);
    Route::post('/user/store', [PenggunaController::class, 'store']);
    Route::get('/user/edit/{id_user}', [PenggunaController::class, 'edit']);
    Route::post('/user/update', [PenggunaController::class, 'update']);
    Route::post('/user/delete', [PenggunaController::class, 'destroy']);
});