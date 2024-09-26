<?php

namespace App\Http\Middleware;

use Closure;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (!Auth::user()->is_admin) {
            return redirect()->route('homepage');
        }

        return $next($request);
    }
}
