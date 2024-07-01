<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Verificar si el usuario está autenticado y es administrador
        if (Auth::check() && Auth::user()->isAdmin()) {
            return $next($request);
        }

        // Redirigir al usuario no autorizado (puedes personalizar la ruta de redirección)
        return redirect('/')->with('error', 'Acceso no autorizado.');
    }
}
