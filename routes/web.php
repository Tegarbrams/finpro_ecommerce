<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AuthController;


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

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [RegisterController::class, 'store']);

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
});
Route::get('/tambah', function () {
    return view('tambah');
});
// Rute untuk menampilkan form login
Route::get('/login', [LoginController::class, 'create'])->name('login');

// Rute untuk memproses data dari form login
Route::post('/login', [LoginController::class, 'store']);

// Rute untuk proses logout
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
// Rute untuk Proses dataListAkun



// Route::post('/auth', [AuthController::class, 'store']);
