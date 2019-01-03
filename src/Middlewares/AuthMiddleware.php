<?php

namespace Ideiasweb\Admin\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //if (auth('admin')->check()) {
            return $next($request);
        //}

        //throw new AuthenticationException('Unauthenticated.', ['admin'], route('login'));
    }
}
