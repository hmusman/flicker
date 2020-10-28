<?php

namespace App\Http\Middleware;

use Closure;
class LoginSessionCheck
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
        if(empty(\Session::get('user')))
        {
            return redirect('/Login');
        }
      
        return $next($request);
    }
}
