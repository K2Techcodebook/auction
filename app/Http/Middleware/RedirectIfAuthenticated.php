<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
       switch ($guard) {
            case 'admin':
         if (Auth::guard($guard)->check()) {
                return redirect()->route('admin.dashboard');
            }
              break;
               case 'affiliate':
            if (Auth::guard($guard)->check()) {
                return redirect()->route('affiliate.dashboard');
            }    
              break;
               case 'business':
                   if (Auth::guard($guard)->check()) {
                return redirect()->route('business.dashboard');
            }
                  break;
            default:
        if (Auth::guard($guard)->check()) {
            return redirect('/dashboard');
        }
   break;
       
    }
     return $next($request);
}

}