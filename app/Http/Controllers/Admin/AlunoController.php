<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;
use Illuminate\Support\Facades\Auth;
use App\Models\Turma;
use Illuminate\Support\Facades\DB;

class AlunoController extends Controller
{
    public function aluno_add()
    {
        $turmas= DB::table('classes')
        ->join('turmas','classes.id','turmas.classe_id')
        ->select('classes.nome_classe','turmas.*')->where([['centroexame','=',Auth::user()->instituicao]])->get();
        return view('dashboard.Aluno.create.index',compact('turmas'));
    }
    public function aluno_store(Request $request)
    {
        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
            'unique:users' => 'O :attribute já está sendo utilizado',
            'nome_aluno.min' => 'É necessário no mínimo 9 caracteres no nome!',
            'nome_aluno.max' => 'É necessário no máximo 9 caracteres no nome!',
            'telefone.min' => 'É necessário no mínimo 9 caracteres no telefone!',
            'telefone.max' => 'É necessário no máximo 9 caracteres no telefone!',
            'email.email' => 'Digite um email válido!',
        ];
        $request->validate(
            [
            'deficiencia'=>'required',
            'nome_aluno'=>'required',
            'data_nasc'=>'required'
            ],
            $mensagens
        );

        try{
        Aluno::create([
                'deficiencia'=>$request->deficiencia,
                'nome_aluno'=>$request->nome_aluno,
                'data_nasc'=>$request->data_nasc,
                'sexo'=>$request->sexo,
                'escola_proveniencia'=>$request->escola_prov,
                'provincia'=>Auth::user()->provincia,
                'municipio'=>Auth::user()->municipio,
                'turma_id'=>$request->turma_id,

             ]);
             return redirect()->back()->with('status_add', '1');
            } catch (\Exception $exceptio) {
                return redirect()->back()->with('status_error', '1');
            }

    }
    public function aluno_edit($id)
    {
        $alunos=Aluno::find($id);
        $turmas= DB::table('classes')
        ->join('turmas','classes.id','turmas.classe_id')
        ->select('classes.nome_classe','turmas.*')->where([['centroexame','=',Auth::user()->instituicao]])->get();
        return view('dashboard.Aluno.edit.index',compact('alunos','turmas'));
    }
    public function aluno_update(Request $request,$id)
    {
        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
            'nome_aluno.min' => 'É necessário no mínimo 9 caracteres no nome!',
            'nome_aluno.max' => 'É necessário no máximo 9 caracteres no nome!',
            'telefone.min' => 'É necessário no mínimo 9 caracteres no telefone!',
            'telefone.max' => 'É necessário no máximo 9 caracteres no telefone!',
            'email.email' => 'Digite um email válido!',
        ];
        $request->validate(
            [
            'nome_aluno'=>'required',

            ],
            $mensagens
        );

        try{
        Aluno::find($id)->update([
            'deficiencia'=>$request->deficiencia,
            'nome_aluno'=>$request->nome_aluno,
            'data_nasc'=>$request->data_nasc,
            'sexo'=>$request->sexo,
            'escola_proveniencia'=>$request->escola_prov,
            'provincia'=>Auth::user()->provincia,
            'municipio'=>Auth::user()->municipio,
            'turma_id'=>$request->turma_id,
             ]);
             return redirect()->back()->with('status_update', '1');
            } catch (\Exception $exceptio) {
                return redirect()->back()->with('status_error', '1');
            }
    }


    public function aluno_index()
    {
        $alunos = DB::table('alunos')
        ->join('turmas','turmas.id','alunos.turma_id')
        ->join('classes','classes.id','turmas.classe_id')
        ->where([['centroexame','=',Auth::user()->instituicao]])
        ->get();
        return view('dashboard.Aluno.index.index', compact('alunos'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    //coisas gerais
    public function aluno_delete($id)
    {
        try{
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
        return redirect()->back()->with('status_delete', '1');
    } catch (\Exception $exceptio) {
        return redirect()->back()->with('status_error', '1');
    }
    }
}
