<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Foundation\Applicaion;

// If Laravel >= 5.2 then delete 'use' and 'implements' of deprecated Middleware interface.
class AddHeaders
{
    public function handle($request, Closure $next)
    {
        $response = $next($request)
              ->header('Access-Control-Allow-Origin', '*')
              ->header('Access-Control-Allow-Credentials', 'true')
              ->header('Access-Control-Allow-Methods', 'GET,HEAD,OPTIONS,POST,PUT"')
              ->header('Access-Control-Allow-Headers', 'Origin, Content-Type');

        return $response;
    }
}
