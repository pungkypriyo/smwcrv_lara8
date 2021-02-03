<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class Admin
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
        // mengidentifikasi jika status is_admin == 1
        // maka akan diperbolehkan untuk menjalankan perintah.

        if (Auth()->user()->user_role == 1) {
            return $next($request);
        }

        return redirect('home')->with('error', "Sorry, u can do that stuff!");
    }
}
