<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItenConstruction;
use Illuminate\Support\Facades\DB;

class ItenConstructionController extends Controller
{
    public function ItenConstruction_add($id)
    {
        return view('dashboard.ItenConstruction.create.index',compact('id'));
    }
    public function ItenConstruction_store(Request $request,$id)
    {
        $mensagens = [
            'required' => 'O :attribute 茅 obrigat贸rio!',
        ];
        $request->validate(
            [
               'codigo_disciplina'=> 'required',
                'codigo_folha'=> 'required',
            ],
            $mensagens
        );
        try {
            ItenConstruction::create([
                'codigo_disciplina' => $request->codigo_disciplina,
                'codigo_folha' => $request->codigo_folha,
                'iten_selection_id' => $id,
            ]);
            return redirect()->back()->with('status_add', '1');
        } catch (\Exception $exceptio) {
            return redirect()->back()->with('status_error', '1');
        }
    }

    public function ItenConstruction_index($id)
    {
       $dados['constructions'] = DB::table('iten_constructions')
       ->join('iten_selections','iten_selections.id','iten_constructions.iten_selection_id')
       ->where([['iten_selection_id','=',$id]])
       ->selectRaw(' iten_constructions.*')
       ->get();
       $dados['selections'] = DB::table('iten_constructions')
       ->join('iten_selections','iten_selections.id','iten_constructions.iten_selection_id')
       ->where([['iten_selection_id','=',$id]])
       ->selectRaw('iten_selections.codigo_folha,iten_selections.codigo_disciplina')
       ->first();
        return view('dashboard.ItenConstruction.index.index', $dados)->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
