<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->status === 0){
            Auth::logout();
            return redirect('/login')->with('deletarErro', 'Usuario Bloqueado!');
        }
        $user = Auth::user();
        $rota = 'login';

        switch ((String) $user->role){
            case 'Admin':
                $rota = 'adminhome';
                break;
            case 'DCE':
                $rota = 'dcehome';
                break;
            case 'Entidade':
                $rota = 'entitiehome';
                break;
            default:
                abort(404);
        }
        return redirect()->route($rota);
    }
}
