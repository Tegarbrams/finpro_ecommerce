<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // ✅ DAFTARKAN MIDDLEWARE ALIAS DI SINI
        $middleware->alias([
            'check.login' => \App\Http\Middleware\CekLogin::class,
            'check.admin' => \App\Http\Middleware\CekSessionAdmin::class,
            'check.pembeli' => \App\Http\Middleware\CekSessionPembeli::class,
        ]);
        
        // Atau bisa juga menggunakan cara ini:
        // $middleware->appendToGroup('web', [
        //     \App\Http\Middleware\CekLogin::class,
        // ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();