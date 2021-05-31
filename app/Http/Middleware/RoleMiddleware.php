<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Exceptions\UnauthorizedException;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            return redirect()->route('welcome')->with('error','Debe ingresar al sistema para acceder');
        }

      /*  if(auth()->user()->hasRole('editor')){
            
        }*/

        $roles = is_array($role)
            ? $role
            : explode('|', $role);

        if (! Auth::guard($guard)->user()->hasAnyRole($roles)) {
            return redirect()->route('welcome')->with('error','Permiso denegado');
        } 

        return $next($request);
    }
}
