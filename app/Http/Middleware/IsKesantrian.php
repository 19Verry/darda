<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsKesantrian
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Daftar peran yang diizinkan
        $allowedRoles = ['mudir', 'tu', 'wakil_mudir', 'kabid_kesantrian'];

        // Memeriksa apakah pengguna terautentikasi dan memiliki salah satu dari peran yang diizinkan
        if (!auth()->check() || !in_array(auth()->user()->role, $allowedRoles)) {
            // Jika tidak, kembalikan error 403 (Forbidden)
            abort(403);
        }

        // Jika pengguna memiliki peran yang sesuai, lanjutkan permintaan
        return $next($request);
    }

}