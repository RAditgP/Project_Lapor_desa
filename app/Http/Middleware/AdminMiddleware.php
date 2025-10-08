<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah sudah login
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Cek apakah role-nya admin
        if (Auth::user()->role !== 'admin') {
            return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        return $next($request);
    }
}
