<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class agecheck
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
        // echo "<h1> i am middleware </h1>";
        if($request->age && $request->age<19)
        {
            return redirect ('/noaccess');
        }
        return $next($request);
    }
}
