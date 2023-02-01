<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Centro;
class CentroController extends Controller
{
                    
    public function centroExame_add()
    {
        return view('dashboard.Centro_Exame.create.index');
    }
    public function centroExame_store(Request $request)
    {
        $mensagens = [
            
        ];
        $request->validate(
            [
            '' 
            ],
            $mensagens
        );
        try {
            Centro::create([
            'nome_centro'=>$request->nome_centro,
            'user_id'=>3
        ]);    
            return redirect()->back()->with('status_add', '1');
        } catch (\Exception $exceptio) {
            return redirect()->back()->with('status_error', '1');
        }
    }
    public function centroExame_edit($id)
    {
        $centroExame=Centro::find($id);
        return view('dashboard.Centro_Exame.edit.index',compact('centroExame'));
    }
    public function centroExame_update(Request $request,$id)
    {
        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
        ];
        $request->validate(
            [
            '',
            ],
            $mensagens
        );
        try {
            Centro::create([
            'nome_centro'=>$request->nome_centro,
            'user_id'=>3
        ]);    
            return redirect()->back()->with('status_add', '1');
        } catch (\Exception $exceptio) {
            return redirect()->back()->with('status_error', '1');
        }
    }
    public function centroExame_index()
    {
        $centro = Centro::where([['tipo_user', '=', 'DP']])->get();
        return view('dashboard.Users.DP.index.index', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    //coisas gerais
    public function delete($id)
    {
        $centroExame = centroExame::findOrFail($id);
        $centroExame->delete();
    }
}
