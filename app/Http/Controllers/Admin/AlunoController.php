<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;
use Illuminate\Support\Facades\Auth;
use App\Models\Turma;
use Illuminate\Support\Facades\DB;

class AlunoController extends Controller
{
    public function aluno_add()
    {
        $turmas = DB::table('classes')
            ->join('turmas', 'classes.id', 'turmas.classe_id')
            ->select('classes.nome_classe', 'turmas.*')->where([['centroexame', '=', Auth::user()->instituicao]])->get();
        return view('dashboard.Aluno.create.index', compact('turmas'));
    }
    public function aluno_store(Request $request)
    {
        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
            'unique:users' => 'O :attribute já está sendo utilizado',
            'nome_aluno.min' => 'É necessário no mínimo 9 caracteres no nome!',
            'nome_aluno.max' => 'É necessário no máximo 9 caracteres no nome!',
            'telefone.min' => 'É necessário no mínimo 9 caracteres no telefone!',
            'telefone.max' => 'É necessário no máximo 9 caracteres no telefone!',
            'email.email' => 'Digite um email válido!',
        ];
        $request->validate(
            [
                'deficiencia' => 'required',
                'nome_aluno' => 'required',
                'data_nasc' => 'required',
                'turma_id' =>'required',
                'sexo' =>'required',
            ],
            $mensagens
        );
        $alunos = DB::table('turmas')
            ->join('alunos', 'turmas.id', 'alunos.turma_id')
            ->select('turmas.*')->where([['centroexame', '=', Auth::user()->instituicao],['turma_id','=',$request->turma_id]])->count();

        $turma = Turma::where([['id', '=', $request->turma_id]])->first();
        if ($alunos >= $turma->quantidade  ) {
            return redirect()->back()->with('status_full', '1');
        } else {
            try {
                Aluno::create([
                    'deficiencia' => $request->deficiencia,
                    'nome_aluno' => $request->nome_aluno,
                    'data_nasc' => $request->data_nasc,
                    'sexo' => $request->sexo,
                    'escola_proveniencia' => $request->escola_prov,
                    'provincia' => Auth::user()->provincia,
                    'municipio' => Auth::user()->municipio,
                    'turma_id' => $request->turma_id,
                ]);
                return redirect()->back()->with('status_add', '1');
            } catch (\Exception $exceptio) {
                return redirect()->back()->with('status_error', '1');
            }
        }
    }
    public function aluno_edit($id)
    {
        $alunos = Aluno::find($id);
        $turmas = DB::table('classes')
            ->join('turmas', 'classes.id', 'turmas.classe_id')
            ->select('classes.nome_classe', 'turmas.*')->where([['centroexame', '=', Auth::user()->instituicao]])->get();
        return view('dashboard.Aluno.edit.index', compact('alunos', 'turmas'));
    }
    public function aluno_update(Request $request, $id)
    {
        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
            'nome_aluno.min' => 'É necessário no mínimo 9 caracteres no nome!',
            'nome_aluno.max' => 'É necessário no máximo 9 caracteres no nome!',
            'telefone.min' => 'É necessário no mínimo 9 caracteres no telefone!',
            'telefone.max' => 'É necessário no máximo 9 caracteres no telefone!',
            'email.email' => 'Digite um email válido!',
        ];
        $request->validate(
            [
                'nome_aluno' => 'required',

            ],
            $mensagens
        );

        try {
            Aluno::find($id)->update([
                'deficiencia' => $request->deficiencia,
                'nome_aluno' => $request->nome_aluno,
                'data_nasc' => $request->data_nasc,
                'sexo' => $request->sexo,
                'escola_proveniencia' => $request->escola_prov,
                'provincia' => Auth::user()->provincia,
                'municipio' => Auth::user()->municipio,
                'turma_id' => $request->turma_id,
            ]);
            return redirect()->back()->with('status_update', '1');
        } catch (\Exception $exceptio) {
            return redirect()->back()->with('status_error', '1');
        }
    }


    public function aluno_index()
    {
        $alunos = DB::table('alunos')
            ->join('turmas', 'turmas.id', 'alunos.turma_id')
            ->join('classes', 'classes.id', 'turmas.classe_id')
            ->where([['centroexame', '=', Auth::user()->instituicao]])
            ->selectRaw('alunos.*,classes.nome_classe,turmas.centroexame,turmas.nome_turma')
            ->get();
        return view('dashboard.Aluno.index.index', compact('alunos'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    //coisas gerais
    public function aluno_delete($id)
    {
        try {
            $aluno = Aluno::findOrFail($id);
            $aluno->delete();
            return redirect()->back()->with('status_delete', '1');
        } catch (\Exception $exceptio) {
            return redirect()->back()->with('status_error', '1');
        }
    }

    //vizualizar e editar resposta e prova para os vigilantes

    public function V_aluno()
    {
        $alunos = DB::table('alunos')
        ->join('turmas', 'turmas.id', 'alunos.turma_id')
        ->join('classes', 'classes.id', 'turmas.classe_id')
        ->where([['centroexame', '=', Auth::user()->instituicao]])
        ->select("alunos.*")
        ->get();
    return view('dashboard.Aluno.v.index', compact('alunos'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function prova_update(Request $request, $id)
    {

        try {
            Aluno::find($id)->update([
                'cod_prova' => $request->cod_prova,
            ]);
            return redirect()->back()->with('status_update', '1');
        } catch (\Exception $exceptio) {
            return redirect()->back()->with('status_error', '1');
        }
    }
    public function resposta_update(Request $request, $id)
    {

        try {
            Aluno::find($id)->update([
                'cod_resp_prova' => $request->cod_resp_prova,
            ]);
            return redirect()->back()->with('status_update', '1');
        } catch (\Exception $exceptio) {
            return redirect()->back()->with('status_error', '1');
        }
    }
    public function delete_aluno($id)
    {
        try{
        $alunos = Aluno::findOrFail($id);
        $alunos->delete();
        return redirect()->back()->with('status_delete', '1');
    } catch (\Exception $exceptio) {
        return redirect()->back()->with('status_error', '1');
    }
    }




    //DC//
    public function searchAluno()
    {
        try {

                $response['turma'] = DB::table('turmas')
                ->join('classes', 'classes.id', 'turmas.classe_id')
                    ->selectRaw('turmas.*,classes.nome_classe')
                    ->where([['centroexame','=',Auth::user()->instituicao]])
                    ->get();

            return view('dashboard.Users.DC.aluno.index', $response);
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('status_Error', '1');
        }
    }
    public function TakeAluno(Request $request)
    {
        try {
            $turma = $request->turma;
            return redirect("/Aluno_pdf_sp/$turma");
        } catch (\Exception $exception) {
            return redirect()
                ->back()
                ->with('status_Error', '1');
        }
    }
    public function index(Aluno $alunoP,$turma)
    {
      try{
      $response['turma'] = $turma;
      $response['logs'] =  $alunoP-> AlunosDcForSearch($turma);
      return view('admin.logs.visualizar.index', $response);
  } catch (\Exception $exception) {
      return redirect()->back()->with('status_Error', '1');
  }
    }

}
