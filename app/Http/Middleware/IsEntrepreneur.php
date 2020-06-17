<?php

namespace App\Http\Middleware;

use Closure;

class IsEntrepreneur
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
        if(auth()->user()->isEntrepreneur()) {
            return $next($request);
        }
        return redirect('home');
    }
}
