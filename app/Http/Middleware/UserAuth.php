<?php

namespace App\Http\Middleware;

use Closure;

class UserAuth
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
        if ($request->path("login") && $request->session()->has("user")) {
            # code...
            return redirect('/');
        } else {
            # code...
        }

        return $next($request);
    }
}
