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

        ];
        $request->validate(
            [
                'nome_turma' => 'required',
                'quantidade' => 'required',
            ],
            $mensagens
        );

        try{
        Turma::create([
            'nome_turma' => $request->nome_turma,
            'quantidade' => $request->quantidade,
            'classe_id' => $request->classe_id,
            'centroexame' => Auth::user()->instituicao,
        ]);
        return redirect()->back()->with('status_add', '1');
    } catch (\Exception $exceptio) {
        return redirect()->back()->with('status_error', '1');
    }
    }
    public function turma_edit($id)
    {
        $turmas = Turma::find($id);
        $classes = DB::table('classes')
            ->join('turmas', 'classes.id', '=', 'turmas.classe_id')
            ->select('classes.nome_classe','turmas.*')
            ->get();

        return view('dashboard.Turma.edit.index', compact('turmas', 'classes'));
    }
    public function turma_update(Request $request, $id)
    {
        $mensagens = [
            'required' => 'O :attribute é obrigatório!',


        ];
        $request->validate(
            [
                'nome_turma' => 'required',
                'quantidade' => 'required',
            ],
            $mensagens
       );
try{
        Turma::find($id)->update([
            'nome_turma' => $request->nome_turma,
            'quantidade' => $request->quantidade,
            'classe_id' => $request->classe_id,

        ]);
        return redirect()->back()->with('status_update', '1');
    } catch (\Exception $exceptio) {
        return redirect()->back()->with('status_error', '1');
    }

    }
    public function turma_index()
    {
        $turmas = DB::table('turmas')
        ->join('classes','classes.id','turmas.classe_id')
        ->where('centroexame','=',Auth::user()->instituicao)
        ->selectRaw('turmas.*,classes.nome_classe')
        ->get();
        return view('dashboard.Turma.index.index', compact('turmas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    //coisas gerais
    public function delete_turma($id)
    {
        try{
        $turma = Turma::findOrFail($id);
        $turma->delete();
        return redirect()->back()->with('status_delete', '1');
    } catch (\Exception $exceptio) {
        return redirect()->back()->with('status_error', '1');
    }
    }
}
