<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function aluno_add()
    {
        return view('dashboard.Aluno.create.index');
    }
    public function aluno_store(Request $request)
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
            'presenca'=>'required|max:5|min:1',
            'deficiencia'=>'required|max:5|min:1',
            'name'=>'required|max:5|min:1',
            'data_nasc'=>'required|max:5|min:1'
            ],
            $mensagens
        );

             User::create([
                'presenca'=>$request->deficiencia,
                'deficiencia'=>$request->deficiencia,
                'name'=>$request->name,
                'data_nasc'=>$request->data_nasc,
                'vigilante'=>$request->vigilante,
                'cod_prova'=>$request->cod_prova,
                'cod_resp_prova'=>$request->cod_resp_prova,
                'provincia'=>$request->provincia,
                'municipio'=>$request->municipio
             ]);
    }
    public function aluno_edit($id)
    {
        $aluno=aluno::find($id);
        return view('dashboard.Aluno.edit.index',compact('aluno'));
    }
    public function aluno_update(Request $request,$id)
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

             aluno::find($id)->update([
                'presenca'=>$request->deficiencia,
                'deficiencia'=>$request->deficiencia,
                'name'=>$request->name,
                'data_nasc'=>$request->data_nasc,
                'vigilante'=>$request->vigilante,
                'cod_prova'=>$request->cod_prova,
                'cod_resp_prova'=>$request->cod_resp_prova,
                'provincia'=>$request->provincia,
                'municipio'=>$request->municipio
             ]);
    }

    //coisas gerais
    public function delete($id)
    {
        $aluno = aluno::findOrFail($id);
        $aluno->delete();
    }
}
