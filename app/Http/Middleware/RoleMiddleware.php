<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $role, $permission = null)
    {
        // if(!$request->user()->hasRole($role)) {

        //      abort(404);

        // }

        // if($permission !== null && !$request->user()->can($permission)) {

        //       abort(404);
        // }

        // return $next($request);
        if ($request->user() === null) 
        {
            return response("U bent niet bevoegd om deze actie uit te voeren.", 401);
        }
        $actions = $request->route()->getAction();
        $roles = isset($actions['roles']) ? $actions['roles'] : null;

        if ($request->user()->hasAnyRole($roles) || !$roles)
        {
            return $next($request);
        }

        return response("U bent niet bevoegd om deze actie uit te voeren.", 401);

    }
}
