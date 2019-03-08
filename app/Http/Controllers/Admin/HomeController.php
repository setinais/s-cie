<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Institution;


class HomeController extends Controller
{
    //

    public function index(){
        if(Auth::user()->role != 'Admin')
            return redirect()->route('home');
        return view('admin.adminhome');
    }

    public function getDados(){
    	$dados = [];

    	$dados['usuarios'] = count(User::all());
    	$dados['instituicoes'] = count(Institution::all());

    	return $dados;
    }
}
