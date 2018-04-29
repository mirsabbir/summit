<?php

namespace App\Http\Middleware;

use Closure;


class AuthenticateAdmin
{
    public function handle($request, Closure $next)
    {
        
        if(!(\Auth::guard('admin')->check())){
            return redirect('admin/login');
        }

        return $next($request);
    }
   
}
