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
            $table->string('presenca');
            $table->string('deficiencia');
            $table->string('nome_aluno');
            $table->string('data_nasc');
            $table->string('vigilante');
            $table->string('sexo');
            $table->string('escola_proveniencia');
            $table->string('cod_prova');
            $table->string('cod_resp_prova');
            $table->string('provincia')->nullable();
            $table->string('municipio')->nullable();
            $table->foreignId('classe_id')
            ->constrained()
            ->onDelete('cascade');
            $table->foreignId('turma_id')
            ->constrained()
            ->onDelete('cascade');
            $table->foreignId('centroexame_id')
            ->constrained()
            ->onDelete('cascade');
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
