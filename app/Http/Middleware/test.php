<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $ip=$request->ip();
        if($ip=='127.0.0.1')
        {
           echo "ok";
        }
        
        else{
        return $next($request);
        }

    }
}
