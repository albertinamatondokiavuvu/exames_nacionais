<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function classe_add()
    {
        return view('dashboard.Classe.create.index');
    }
    public function classe_store(Request $request)
    {
        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
            'unique:users' => 'O :attribute já está sendo utilizado',
            'name.min' => 'É necessário no mínimo 9 caracteres no nome!',
            'name.max' => 'É necessário no máximo 9 caracteres no nome!',
            'telefone.min' => 'É necessário no mínimo 9 caracteres no telefone!',
            'telefone.max' => 'É necessário no máximo 9 caracteres no telefone!',
            'email.email' => 'Digite um email válido!',
        ];
        $request->validate(
            [
            'name'=>'required|max:5|min:1',
            ],
            $mensagens
        );

             User::create([
                'name'=>$request->name,
             ]);
    }
    public function classe_edit($id)
    {
        $classe=classe::find($id);
        return view('dashboard.classe.edit.index',compact('classe'));
    }
    public function classe_update(Request $request,$id)
    {
        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
            'unique:users' => 'O :attribute já está sendo utilizado',
            'name.min' => 'É necessário no mínimo 9 caracteres no nome!',
            'name.max' => 'É necessário no máximo 9 caracteres no nome!',
            'telefone.min' => 'É necessário no mínimo 9 caracteres no telefone!',
            'telefone.max' => 'É necessário no máximo 9 caracteres no telefone!',
            'email.email' => 'Digite um email válido!',
        ];
        $request->validate(
            [
            'name'=>'required|max:255|min:4',
            'email'=>'email',
            'provincia'=>'required',
            'telefone'=>'required|min:9|max:9',
            ],
            $mensagens
        );

             classe::find($id)->update([
                'name'=>$request->name,
                'qtd'=>$request->qtd,
             ]);
    }

    //coisas gerais
    public function delete($id)
    {
        $classe = Classe::findOrFail($id);
        $classe->delete();
    }

}
