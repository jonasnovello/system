<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PermissionUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && strripos(auth()->user()->permissions, str_replace('/', '', $request->getRequestUri()))) {
            return $next($request);
        } else {
            return redirect()->route('access-denied')->with('error', 'You do not have permission to access this area.');
        }
    }
}

