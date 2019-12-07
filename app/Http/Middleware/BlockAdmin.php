<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class BlockAdmin
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
        if(Auth::user()->blockid==2){
           return redirect ('/admin/not_found');
        }
        return $next($request);
    }

}
