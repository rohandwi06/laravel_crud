<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekLevel
{
    public function handle(Request $request, Closure $next, $userType): Response
    {

        if(auth()->check() && auth()->user()->id_role == $userType) {
            return $next($request);
        }

        abort(401);

    }
}
