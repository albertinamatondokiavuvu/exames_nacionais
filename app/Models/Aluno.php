<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class Aluno extends Model
{
    use HasFactory;
    protected $guarded = ['id'];



    public function turma(){
        return $this->belongTo('App\Models\Turma');
    }
    public function itenSelection(){
        return $this->hasMany('App\Models\ItenSelection');
    }
    public function AlunosDcForSearch($turma)
    {
        $response['alunos'] = DB::table('alunos')
        ->join('turmas', 'turmas.id', 'alunos.turma_id')
        ->join('classes', 'classes.id', 'turmas.classe_id')
        ->selectRaw('alunos.*,classes.nome_classe,turmas.centroexame,turmas.nome_turma')
        ->where([
            ['centroexame','=',Auth::user()->instituicao],
            ['alunos.turma_id','=',$turma]
        ])->orderByRaw("nome_turma ASC,nome_aluno ASC ");
        if (
            $turma == 'Todos'
        ) {
            $response['alunos'] = DB::table('alunos')
            ->join('turmas', 'turmas.id', 'alunos.turma_id')
            ->join('classes', 'classes.id', 'turmas.classe_id')
            ->selectRaw('alunos.*,classes.nome_classe,turmas.centroexame,turmas.nome_turma')
            ->where([
                ['centroexame','=',Auth::user()->instituicao]
            ]);

        }
        return $response['alunos']->get();
    }
}
