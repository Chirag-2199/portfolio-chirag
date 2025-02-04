<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the admin is logged in using a session flag.
        if (!$request->session()->has('admin_logged_in')) {
            return redirect()->route('admin.login.form');
        }

        return $next($request);
    }
}
