<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function authenticate($request, array $guards)
    {
        if (!$request->expectsJson()) {
            return route('login'); // Redirect to login page for non-API requests
        }
    }
}
