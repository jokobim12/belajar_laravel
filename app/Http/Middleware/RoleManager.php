<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleManager
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Cek apakah user sudah login dan apakah rolenya sesuai
        if (!auth()->check() || auth()->user()->role !== $role) {
            // Jika tidak sesuai, lempar ke dashboard utama masing-masing
            return redirect('/dashboard');
        }

        return $next($request);
    }

}
