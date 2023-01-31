<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    
    public function turma_add()
    {
        return view('dashboard.Turma.create.index');
    }
    public function turma_store(Request $request)
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
            'qtd'=>'required|max:5|min:1',
            ],
            $mensagens
        );

             User::create([
                'name'=>$request->name,
                'qtd'=>$request->qtd,
             ]);
    }
    public function turma_edit($id)
    {
        $turma=Turma::find($id);
        return view('dashboard.Turma.edit.index',compact('turma'));
    }
    public function turma_update(Request $request,$id)
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

             Turma::find($id)->update([
                'name'=>$request->name,
                'qtd'=>$request->qtd,
             ]);
    }

    //coisas gerais
    public function delete($id)
    {
        $turma = Turma::findOrFail($id);
        $turma->delete();
    }
}
