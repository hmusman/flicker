<?php

namespace App\Http\Middleware;

use Closure;

class AdminLoginSessionCheck
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
         if(empty(\Session::get('admin')))
        {
            return redirect('/AdminLogin');
        }
        return $next($request);
    }
}
