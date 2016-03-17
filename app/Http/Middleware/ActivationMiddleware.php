<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ActivationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( ! Auth::guest() && Auth::user()->activation)
        {
            return $next($request);
        }
        else
        {
            \Session::flush();
            return redirect('login')->with('status', 'Please activate your account first!');
        }
       
    }
}
