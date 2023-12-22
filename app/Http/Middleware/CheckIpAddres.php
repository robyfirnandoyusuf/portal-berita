<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckIpAddres
{

    public function handle(Request $request, Closure $next)
      {
        $ipAddress = $request->ip();
        return $next($request);
    }
}
