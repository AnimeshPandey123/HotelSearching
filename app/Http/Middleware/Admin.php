<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class Admin
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
        if(Auth::user()->admin=='0')
            {
                Session::flash('nope','You do not have permission to access');
                return redirect()->back();
            }
            else{
               return $next($request); 
            }
        
    }
}