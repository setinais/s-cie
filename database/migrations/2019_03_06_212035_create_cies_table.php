<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('student_id');
            $table->date('validade');
            $table->date('data_emissao');
            $table->enum('status',['Pendente', 'Aprovado', 'Emitida', 'Cancelada', 'Rejeitada', 'Em Analise']);
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
        Schema::dropIfExists('cies');
    }
}
