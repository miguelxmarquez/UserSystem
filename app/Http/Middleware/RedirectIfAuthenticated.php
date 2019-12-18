<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
        $users = User::all();        
        if (Auth::guard($guard)->check()) {

            if($users->type == 'model'){
                //
                return redirect('/home');
            }else{
                return redirect('/admin/users');
            }
        }

        return $next($request);
    }
}
