<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        if ($user->role === 'admin' && in_array('admin', $roles)) {
            return $next($request);
        }
    
        if ($user->role === 'superadmin' && in_array('superadmin', $roles)) {
            return $next($request);
        }
        
        if ($user->role === 'user' && in_array('user', $roles)) {
            return $next($request);
        }

        return redirect()->route('home')->with('error', 'Unauthorized access');
    }
}
