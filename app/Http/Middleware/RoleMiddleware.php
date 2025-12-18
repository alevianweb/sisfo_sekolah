<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string $role)
    {
        if (!session('user') || session('user')->role !== $role) {
            return redirect('/login');
        }

        return $next($request);
    }
}
