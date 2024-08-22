<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function handle(Request $request, Closure $next, $permission): Response
    {
        $user = Auth::user();

        if ($user && $user->hasPermission($permission)){
            return $next($request);
        }

        return redirect()->route('access-denied')->with('error', 'You do not have permission to
        access '.$permission.' information.');
    }
}

