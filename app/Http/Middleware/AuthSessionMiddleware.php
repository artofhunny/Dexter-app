<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthSessionMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if user session exists
        if (!session()->has('user_id')) {
            return redirect()->route('login')->with('error', 'Please log in to access this page.');
        }

        return $next($request);
    }
}

