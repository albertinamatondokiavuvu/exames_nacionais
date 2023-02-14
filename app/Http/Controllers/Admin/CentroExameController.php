<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CentroExame;
class CentroExameController extends Controller
{
    public function centro_add()
    {

        return view('dashboard.Centro_Exame.create.index');
    }
    public function centro_store(Request $request)
    {
        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
        ];
        $request->validate(
            [
                'nome_centro' => 'required',
            ],
            $mensagens
        );
try{
        CentroExame::create([
            'nome_centro' => $request->nome_centro,
            'provincia' => Auth::user()->provincia,
            'municipio' => Auth::user()->municipio,
        ]);
        return redirect()->back()->with('status_add', '1');
    } catch (\Exception $exceptio) {
        return redirect()->back()->with('status_error', '1');
    }
    }
    public function centro_index()
    {
        $centros = CentroExame::where([['provincia', '=',Auth::user()->provincia], ['municipio', '=', Auth::user()->municipio]])->get();
        return view('dashboard.Centro_Exame.index.index', compact('centros'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
 //coisas gerais
 public function delete_centro($id)
 {
    try{
     $centros = CentroExame::findOrFail($id);
     $centros->delete();
    } catch (\Exception $exceptio) {
        return redirect()->back()->with('status_error', '1');
    }

 }

}
