<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

// class AuthController extends Controller
// {
//     // Menampilkan form login
//     public function showLoginForm()
//     {
//         return view('auth.login');
//     }

//     // Proses login
//     public function login(Request $request)
//     {
//         $credentials = $request->validate([
//             'email' => 'required|email',
//             'password' => 'required|min:6',
//         ]);

//         if (Auth::attempt($credentials)) {
//             $request->session()->regenerate();
            
//             $user = Auth::user();
            
//             // Redirect berdasarkan role
//             if ($user->isAdmin()) {
//                 return redirect()->intended('/admin/dashboard')
//                     ->with('success', 'Selamat datang, Admin!');
//             } else {
//                 return redirect()->intended('/user/dashboard')
//                     ->with('success', 'Selamat datang!');
//             }
//         }

//         return back()->withErrors([
//             'email' => 'Email atau password yang Anda masukkan salah.',
//         ])->onlyInput('email');
//     }

//     // Menampilkan form registrasi
//     public function showRegistrationForm()
//     {
//         return view('auth.register');
//     }

//     // Proses registrasi
//     public function register(Request $request)
//     {
//         $validator = Validator::make($request->all(), [
//             'name' => 'required|string|max:255',
//             'email' => 'required|string|email|max:255|unique:users',
//             'password' => 'required|string|min:6|confirmed',
//             'role' => 'required|in:admin,user',
//         ]);

//         if ($validator->fails()) {
//             return redirect()->back()
//                 ->withErrors($validator)
//                 ->withInput();
//         }

//         $user = User::create([
//             'name' => $request->name,
//             'email' => $request->email,
//             'password' => Hash::make($request->password),
//             'role' => $request->role,
//         ]);

//         // Auto login setelah registrasi
//         Auth::login($user);

//         // Redirect berdasarkan role
//         if ($user->isAdmin()) {
//             return redirect('/admin/dashboard')
//                 ->with('success', 'Registrasi berhasil! Selamat datang, Admin!');
//         } else {
//             return redirect('/user/dashboard')
//                 ->with('success', 'Registrasi berhasil! Selamat datang!');
//         }
//     }

//     // Logout
//     public function logout(Request $request)
//     {
//         Auth::logout();
//         $request->session()->invalidate();
//         $request->session()->regenerateToken();

//         return redirect('/login')
//             ->with('success', 'Berhasil logout.');
//     }
// }