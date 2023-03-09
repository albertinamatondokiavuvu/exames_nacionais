<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('presenca')->nullable();
            $table->string('deficiencia');
            $table->string('nome_aluno');
            $table->date('data_nasc');
            $table->string('sexo');
            $table->string('escola_proveniencia');
            $table->string('cod_prova')->nullable();
            $table->string('cod_resp_prova')->nullable();
            $table->string('provincia')->nullable();
            $table->string('municipio')->nullable();
            $table->foreignId('turma_id')
            ->constrained()
            ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
