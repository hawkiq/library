<?php

namespace App\Http\Middleware;

use Closure;

class CheckUserRole
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
        if ($request->user() === null){
            return redirect(route('login'));
        }
        $actions = $request->route()->getAction();
        $roles = isset($actions['roles']) ? $actions['roles'] : null ;
        if ($request->user()->hasAnyRole($roles) || !$roles){
            return $next($request);
        }
       abort(403,'Not Authorized');
    }
}
