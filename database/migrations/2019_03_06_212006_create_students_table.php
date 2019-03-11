<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('rg');
            $table->string('cpf');
            $table->integer('institution_id');
            $table->integer('entitie_id');
            $table->string('cidade');
            $table->string('estado');
            $table->string('curso');
            $table->string('escolaridade');
            $table->string('matricula');
            $table->string('endereco');
            $table->enum('estado_civil', ['Casado(a)', 'Solteiro(a)', 'Viuvo(a)', 'Divorciado(a)']);
            $table->enum('sexo',['Masculino', 'Feminino']);
            $table->string('telefone');
            $table->string('email');
            $table->string('foto_3x4')->nullable();
            $table->string('codigo_uso');
            $table->date('validade');
            $table->date('data_emissao');
            $table->enum('status',['Pendente', 'Aprovado', 'Emitida', 'Cancelada', 'Rejeitada', 'Em Analise'])->default('Pendente');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
