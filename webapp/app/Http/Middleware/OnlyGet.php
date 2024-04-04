<?php

namespace App\Http\Middleware;

use Closure;

class OnlyGet
{
    public function handle($request, Closure $next)
    {
        $allowedMethods = ['GET', 'HEAD'];

        if (!in_array($request->method(), $allowedMethods)) {
            return response()->json(['error' => 'Method Not Allowed'], 405);
        }

        // For HEAD requests, return an empty response
        if ($request->isMethod('head')) {
            return response()->make();
        }

        return $next($request);
    }
}
