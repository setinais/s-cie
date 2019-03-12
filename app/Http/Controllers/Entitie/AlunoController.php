<?php

namespace App\Http\Controllers\Entitie;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Institution;
use Illuminate\Support\Facades\Validator;

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

    public function showCadastro(){
        return view('entitie.cadastroaluno');
    }
    public function cadastroAluno(Request $request){
        var_dump($_REQUEST);
        return view('entitie.cadastroaluno');
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
        if ($validator->fails()) {
            return redirect('entitie/cadastraraluno')
                ->withErrors($validator)
                ->withInput();
        }else{
            $aluno = new Student();
            $aluno->name = $request->all()->name;
            $aluno->email = $request->all()->email;
            $aluno->rg = $request->all()->rg;
            $aluno->cpf = $request->all()->cpf;
            $aluno->cidade = $request->all()->cidade;
            $aluno->estado = $request->all()->estado;
            $aluno->endereco = $request->all()->endereco;
            $aluno->estado_civil = $request->all()->estado_civil;
            $aluno->sexo = $request->all()->sexo;
            $aluno->telefone = $request->all()->telefone;
            $aluno->matricula = $request->all()->matricula;
            $aluno->curso = $request->all()->curso;
            $aluno->escolaridade = $request->all()->escolaridade;

            return redirect('entitie/cadastraraluno')->whith('msg', 'Aluno cadastrado com sucesso!');
        }
    }
}
