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
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->status === 0){
                Auth::logout();
                return redirect('/login')->with('deletarErro', 'Usuario Bloqueado!');
            }else if(Auth::user()->email_verified_at === null){
                Auth::logout();
                return redirect('/login')->with('deletarErro', 'Usuario com e-mail não validado! Por favor verifique sua caixa de entrada ou spam.');
            }
            return redirect('/home');
        }

        return $next($request);
    }
}
