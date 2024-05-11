<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, \Closure $next, $role): Response
    {
        if (!Auth::check()) {
            return redirect('/login-user');
        }

        $user = Auth::user();

        if ($user->role == $role) {
            return $next($request);
        }

        abort(403, 'Unauthorized action.');
    }
}
