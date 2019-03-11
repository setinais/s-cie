@extends('layouts.entitie')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="id_email">Email</label>
                        <input type="email" class="form-control" name="email" id="id_email" placeholder="example@example.com">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="id_cpf">CPF</label>
                        <input type="number" class="form-control" name="cpf" id="id_cpf" placeholder="XXX.XXX.XXX-XX">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="id_rg">RG</label>
                        <input type="number" class="form-control" name="rg" id="id_rg" placeholder="545.587">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="id_cidade">Cidade</label>
                        <input type="text" class="form-control" name="cidade" id="id_cidade" placeholder="Palmas">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="id_estado">Estado</label>
                        <input type="text" class="form-control" name="estado" id="id_estado" placeholder="Tocantins">
                    </div>
                </div>
                <div class="form-group">
                    <label for="id_endereco">Endereço Completo</label>
                    <input type="text" class="form-control" name="endereco" id="id_endereco" placeholder="Rua Augustinho Melo, Nª5324 - Setor Bela Vista">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="id_estado_civil">Estado Civel</label>
                        <select id="id_estado_civil" class="form-control">
                            <option selected>Selecione...</option>
                            <option>Casado(a)</option>
                            <option>Solteiro(a)</option>
                            <option>Viuvo(a)</option>
                            <option>Divorciado(a)</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputCity">Sexo</label>
                        <input type="radio" class="custom-radio" name="sexo" placeholder="Masculino">Masculino
                        <input type="radio" class="custom-radio" name="sexo" placeholder="Feminino">Feminino
                    </div>
                    <div class="form-group col-md-3">
                        <label for="id_telefone">Telefone</label>
                        <input type="text" class="form-control" name="telefone" id="id_telefone" placeholder="(63) 9 99984-5543">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="id_matricula">Matricula</label>
                        <input type="number" class="form-control" name="matricula" id="id_matricula" placeholder="20164584825525">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="id_curso">Curso</label>
                        <input type="text" class="form-control" name="curso" id="id_curso" placeholder="Bacharelado em Sitemas da Informação">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="id_escolaridade">Escolaridade</label>
                        <input type="text" class="form-control" name="escolaridade" id="id_escolaridade" placeholder="7ª Periodo">
                    </div>
                </div>

                <a href="{{route('home')}}" class="btn btn-danger">Voltar</a>
                <button type="submit" class="btn btn-success float-right">Salvar</button>
            </form>
            <!-- /.col -->
        </div>
    </div>
</div>

@endsection
