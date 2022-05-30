<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userType)
    {
        // if(auth()->user()->type == $userType){
        //     return $next($request);
        // }
        if (auth()->user()->type == 'admin') {
            return $next($request);
        } elseif (auth()->user()->type == 'superadmin') {
            return $next($request);
        }elseif (auth()->user()->type == 'student') {
            return $next($request);
        }elseif (auth()->user()->type == 'university') {
            return $next($request);
        }
          
        return response()->json(['You do not have permission to access for this page.']);
        /* return response()->view('errors.check-permission'); */
    }
}
