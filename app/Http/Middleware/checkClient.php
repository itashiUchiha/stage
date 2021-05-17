<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkClient 
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
        if (!session()->has("loggedUser")) {
            return redirect("signup");
           
         }
         return $next($request);
        
      

    }
}
