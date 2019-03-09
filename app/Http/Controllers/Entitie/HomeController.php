<?php

namespace App\Http\Controllers\Entitie;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

class HomeController extends Controller
{
    //

    public function index(){
        if(Auth::user()->role != 'Entidade')
            return redirect()->route('home');
        return view('entitie.entitiehome');
    }

    public function getDados(){
    	$dados = [];

    	$dados['alunos'] = count(Student::all());

    	return $dados;
    }
}
