<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItenSelection;
use Illuminate\Support\Facades\DB;

class ItenSelectionController extends Controller
{
    public function ItenSelection_add($id)
    {

        return view('dashboard.ItenSelection.create.index',compact('id'));
    }
    public function ItenSelection_store(Request $request,$id)
    {
        $mensagens = [
            'required' => 'O :attribute 茅 obrigat贸rio!',
        ];
        $request->validate(
            [
                'tipo'=>'required',
               'codigo_disciplina'=> 'required',
                'codigo_folha'=> 'required',

            ],
            $mensagens
        );
try{
            ItenSelection::create([
                'tipo'=>$request->tipo,
                'codigo_disciplina' => $request->codigo_disciplina,
                'codigo_folha' => $request->codigo_folha,
                'aluno_id' => $id,
            ]);
            return redirect()->back()->with('status_add', '1');
        } catch (\Exception $exceptio) {
            return redirect()->back()->with('status_error', '1');
        }

    }

    public function ItenSelection_index($id)
    {
       $dados['selections'] = DB::table('iten_selections')
       ->join('alunos','alunos.id','iten_selections.aluno_id')
       ->where([['aluno_id','=',$id]])
       ->selectRaw('iten_selections.*')
       ->get();
       $dados['alunos'] = DB::table('iten_selections')
       ->join('alunos','alunos.id','iten_selections.aluno_id')
       ->where([['aluno_id','=',$id]])
       ->selectRaw('alunos.nome_aluno')
       ->first();
        return view('dashboard.ItenSelection.index.index', $dados)->with('i', (request()->input('page', 1) - 1) * 5);
    }


}
