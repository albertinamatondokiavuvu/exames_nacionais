<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Turma;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TurmaController extends Controller
{

    public function turma_add()
    {
        $classes = DB::table('classes')
            ->get();

        return view('dashboard.Turma.create.index', compact('classes'));
    }
    public function turma_store(Request $request)
    {
        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
            'nome_turma.min' => 'É necessário no mínimo 9 caracteres no nome!',
            'nome_turma.max' => 'É necessário no máximo 9 caracteres no nome!',
        ];
        $request->validate(
            [
                'nome_turma' => 'required|max:5|min:1',
                'quantidade' => 'required|max:5|min:1',
            ],
            $mensagens
        );

        Turma::create([
            'nome_turma' => $request->nome_turma,
            'quantidade' => $request->quantidade,
            'classe_id' => $request->classe_id,
            'centroexame' => Auth::user()->instituicao,
        ]);
    }
    public function turma_edit($id)
    {
        $turmas = Turma::find($id);
        $classes = DB::table('classes')
            ->join('turmas', 'classes.id', '=', 'turmas.classe_id')
            ->select('classes.nome_classe','classes.id')
            ->get();

        return view('dashboard.Turma.edit.index', compact('turmas', 'classes'));
    }
    public function turma_update(Request $request, $id)
    {
        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
            'nome_turma.min' => 'É necessário no mínimo 9 caracteres no nome!',
            'nome_turma.max' => 'É necessário no máximo 9 caracteres no nome!',

        ];
        $request->validate(
            [
                'nome_turma' => 'required|max:255|min:4',
                'quantidade' => 'required',
            ],
            $mensagens
        );

        Turma::find($id)->update([
            'nome_turma' => $request->nome_turma,
            'quantidade' => $request->quantidade,
            'classe_id' => $request->classe_id,

        ]);
    }
    public function turma_index()
    {
        $turmas = DB::table('turmas')
        ->join('classes','classes.id','turmas.classe_id')
        ->get();
        return view('dashboard.Turma.index.index', compact('turmas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    //coisas gerais
    public function delete_turma($id)
    {
        $turma = Turma::findOrFail($id);
        $turma->delete();
    }
}
