<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->user_type == 2){
            return $next($request);
        }
        Toastr::error(trans('You do not have the permission to access'), 'Error', ["positionClass" => "toast-top-right"]);
        return redirect()->route('home')->with('error',"You do not have the permission to access");
    }

}
