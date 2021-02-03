<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
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
        // Menerima role yang di sarankan oleh `route`.
        $roles = $this->getRequiredRoleForRoute($request->route());

        // Check jika role merupakan disarankan oleh `route`, dan
        // juga memastikan user berhak atas role tersebut.
        if ($request->user()->hasRole($roles) || $roles) {
            return $next($request);
        }
        // return $next($request);
        return redirect('admin/logout');
        /*return response([

            'error' => [
                'code' => 'INSUFFICIENT_ROLE',
                'description' => 'You are not authorized to access this resource.'
            ]
        ], 401);*/

    }

    private function getRequiredRoleForRoute($route)
    {
        $actions = $route->getAction();
        return isset($actions['roles']) ? $actions['roles'] : null;
    }
}
