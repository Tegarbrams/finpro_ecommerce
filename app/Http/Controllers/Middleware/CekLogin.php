<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login (ada session user_id)
        if (!session('user_id')) {
            // Jika request AJAX/API, return JSON response
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unauthorized. Please login first.'
                ], 401);
            }
            
            // Simpan URL yang dituju untuk redirect setelah login
            session(['url.intended' => $request->url()]);
            
            // Redirect ke halaman login
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu');
        }
        
        return $next($request);
    }
}