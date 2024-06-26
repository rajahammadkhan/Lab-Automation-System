<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use Illuminate\Http\Request;

class IsUser
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
        if(Auth::check() && Auth::user()->is_admin ==1)
            abort(403, 'Unauthorized action.');
        {

            return $next($request);
        }
        return redirect('home')->with('error','You Have No User Access');
    }
}
