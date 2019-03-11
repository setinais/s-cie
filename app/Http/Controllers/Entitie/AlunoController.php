<?php

namespace App\Http\Controllers\Entitie;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Institution;

class AlunoController extends Controller
{
    public function getAlunos(Request $request){
        $dados = null;

        $students = Student::all();

        foreach ($students as $key => $val){
            $dados[] = [
                'id' => $val->id,
                'name' => $val->nome,
                'email' => $val->email,
                'status' => $val->status,
                'sexo' => $val->sexo,
                'matricula' => $val->matricula,
                'curso' => $val->curso,
                'instituicao' => $val->institution->name
            ];
        }
        //return view('welcome')->with('dados',$dados);
        return $dados;
    }

    public function cadastroAluno(Request $request){
        if($request->is()){
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'rg' => ['required', 'string', 'min:8', 'confirmed'],
                'cpf' => ['required', 'string', 'min:8', 'confirmed'],
                'cidade' => ['required', 'string', 'min:8', 'confirmed'],
                'estado' => ['required', 'string', 'min:8', 'confirmed'],
                'endereco' => ['required', 'string', 'min:8', 'confirmed'],
                'estado_civil' => ['required', 'string', 'min:8', 'confirmed'],
                'sexo' => ['required', 'string', 'min:8', 'confirmed'],
                'telefone' => ['required', 'string', 'min:8', 'confirmed'],
                'matricula' => ['required', 'string', 'min:8', 'confirmed'],
                'curso' => ['required', 'string', 'min:8', 'confirmed'],
                'escolaridade' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
        }else{

        }
        return view('entitie.cadastroaluno')->withErrors('errors', $request->);
    }
}
