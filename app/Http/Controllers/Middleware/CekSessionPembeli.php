<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekSessionPembeli
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user adalah pembeli
        if (session('role') !== 'user') {
            return redirect('/')->with('error', 'Akses ditolak. Hanya pembeli yang diizinkan.');
        }
        
        return $next($request);
    }
}