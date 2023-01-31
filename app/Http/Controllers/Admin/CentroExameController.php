<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CentroExameController extends Controller
{
    public function centroExame_add()
    {
        return view('dashboard.CentroExame.create.index');
    }
    public function centroExame_store(Request $request)
    {
        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
        ];
        $request->validate(
            [
            'name'=>'required|max:5|min:1',
            ],
            $mensagens
        );

             User::create([
                'name'=>$request->name,
                'qtd'=>$request->qtd,
             ]);
    }
    public function centroExame_edit($id)
    {
        $centroExame=centroExame::find($id);
        return view('dashboard.centroExame.edit.index',compact('centroExame'));
    }
    public function centroExame_update(Request $request,$id)
    {
        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
        ];
        $request->validate(
            [
            'name'=>'required|max:255|min:4',
            ],
            $mensagens
        );

             centroExame::find($id)->update([
                'name'=>$request->name,
             ]);
    }

    //coisas gerais
    public function delete($id)
    {
        $centroExame = centroExame::findOrFail($id);
        $centroExame->delete();
    }
}
