<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'isadmin' => \App\Http\Middleware\IsAdmin::class,
            'ismudir' => \App\Http\Middleware\IsMudir::class,
            'istu' => \App\Http\Middleware\IsTu::class,
            'iswakilmudir' => \App\Http\Middleware\IsWakilMudir::class,
            'iskabidkurikulum' => \App\Http\Middleware\IsKabidKurikulum::class,
            'iskabidtahfidz' => \App\Http\Middleware\IsKabidTahfidz::class,
            'iskabidkesantrian' => \App\Http\Middleware\IsKabidKesantrian::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();