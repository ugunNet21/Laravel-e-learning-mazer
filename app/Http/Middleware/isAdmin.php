<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class isAdmin
{

    public function handle(Request $request, Closure $next): Response
    {

        // if (! $request->user()->hasRole($role)) {
        //     abort(403, 'Unauthorized action.');
        // }
        return $next($request);
    }
}
