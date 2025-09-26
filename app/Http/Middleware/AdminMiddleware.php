<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // <-- PENTING: Untuk memeriksa status login user
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Aturan Pengecekan:
        // 1. Cek dulu apakah ada user yang sedang login (Auth::check())
        // 2. DAN (&&) periksa apakah user yang login itu rolenya adalah 'admin' (Auth::user()->role === 'admin')
        if (Auth::check() && Auth::user()->role === 'admin') {
            // Jika kedua syarat terpenuhi, izinkan user untuk melanjutkan ke halaman yang dia tuju.
            return $next($request);
        }

        // Jika salah satu atau kedua syarat tidak terpenuhi (bukan admin atau belum login),
        // tendang dia kembali ke halaman utama.
        return redirect('/');
    }
}

