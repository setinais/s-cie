<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if(Auth::user()->status === 0){
                Auth::logout();
                return redirect('/login')->with('deletarErro', 'Usuario Bloqueado!');
            }else if(Auth::user()->email_verified_at === null){
                Auth::logout();
                return redirect('/login')->with('deletarErro', 'Usuario com e-mail não validado! Por favor verifique sua caixa de entrada ou spam.');
            }
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
