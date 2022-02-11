<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRolRegular
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
        switch(auth()->user()->rol->key){
            case('admin'):
                return $next($request);
                break;
            case('regular'):
                return $next($request);
                break;
            case('3'):
                return redirect('home');
                break;
            case('4'):
                return redirect('welcome');
                break;
        }
    }
}
