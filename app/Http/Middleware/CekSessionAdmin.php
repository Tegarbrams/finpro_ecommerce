<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekSessionAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user adalah admin
        if (session('role') !== 'admin') {
            return redirect('/dashboard')->with('error', 'Akses ditolak. Hanya admin yang diizinkan.');
        }
        
        return $next($request);
    }
}