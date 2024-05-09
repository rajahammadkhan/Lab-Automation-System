<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && Auth::user()->is_admin ==0)
            abort(403, 'Unauthorized action.');
        {

            return $next($request);
        }
        return redirect('tester-dashboard')->with('error','You Have No User Access');
    }
}
