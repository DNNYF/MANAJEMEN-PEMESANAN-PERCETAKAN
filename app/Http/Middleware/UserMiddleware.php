<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\UserdataAcara;

class UserMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            // Jika peran pengguna adalah 'user', biarkan mereka melanjutkan
            if (auth()->user()->role === 'user') {
                return $next($request);
            }
            // Jika peran pengguna adalah 'admin', arahkan mereka ke '/admin'
            elseif (auth()->user()->role === 'admin') {
                return redirect('/product');
            }
        }

        return redirect('/login');
        //return redirect()->back();
        //abort(403, 'Anda tidak memiliki izin.');
    }
}