<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{

    public function handle(Request $request, Closure $next): Response
    {
        // if ($request->input('token') !== 'my-secret-token') {
        //     return redirect('home');
        // }
        return $next($request);
    }
}
