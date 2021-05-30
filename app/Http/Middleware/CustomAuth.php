<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CustomAuth
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
        // return "Hello form custom auth";
        
       $path = $request->path();
       if( ($path == 'login' || $path == "register") && session()->has('name')  ) {
            return redirect('/');
       }
       else if( ($path != "login" && !session()->has('name')) &&  ($path != "register" && !session()->has('name'))) {
            return redirect('/login');
       }


        return $next($request);
    }
}
