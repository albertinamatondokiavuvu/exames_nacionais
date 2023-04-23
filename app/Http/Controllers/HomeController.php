<?php

namespace App\Http\Controllers;

use App\Models\centroExameExame;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Aluno;
use App\Models\CentroExame;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //dm
        $centro_aluno =  DB::table('alunos')
            ->join('turmas', 'turmas.id', 'alunos.turma_id')
            ->join('classes', 'classes.id', 'turmas.classe_id')
            ->where([['municipio', '=', Auth::user()->municipio]])
            ->selectRaw('centroexame as centro3,COUNT(*) as count')->groupBy('centro3')
            ->pluck('count', 'centro3');

        $centro3 = $centro_aluno->keys();
        $total_aluno = $centro_aluno->values();

        $centro_sp = User::where([['tipo_user', '=', 'SP'], ['municipio', '=', Auth::user()->municipio]])
            ->selectRaw('instituicao as sp_centro,COUNT(*) as count')->groupBy('sp_centro')
            ->pluck('count', 'sp_centro');

        $sp_centro = $centro_sp->keys();
        $total_sp = $centro_sp->values();

        $centro_v = User::where([['tipo_user', '=', 'V'], ['municipio', '=', Auth::user()->municipio]])
            ->selectRaw('instituicao as v_centro,COUNT(*) as count')->groupBy('v_centro')
            ->pluck('count', 'v_centro');


        $v_centro = $centro_v->keys();
        $total_v = $centro_v->values();

        //V
        $tes = Aluno::get();
        $ano = Aluno::selectRaw('YEAR(created_at) as year,COUNT(*) as count')->groupBy('year')->get();

        $data = [
            'year' => json_encode($ano->pluck('year')),
            'user' => json_encode($ano->pluck('count')),
        ];
        $data['masculino'] = 0;
        $data['feminino'] = 0;
        foreach ($tes as $teb) {
            $data['feminino'] = Aluno::where([['sexo', '=', 'Feminino']])->count();
            $data['masculino'] =  Aluno::where([['sexo', '=', 'Masculino']])->count();
        }
        //admin
        $data['total_alunos'] = Aluno::count();
        $data['total_centroexame'] = CentroExame::count();
        $data['total_alunos_def'] = Aluno::where([['deficiencia', '!=', 'Nenhum']])->count();
        //DP
        $data['dp'] = User::where([['tipo_user', '=', 'DP']])->count();
        $data['dm'] = User::where([['tipo_user', '=', 'DM'], ['provincia', '=', Auth::user()->provincia]])->count();
        $data['dc'] = User::where([['tipo_user', '=', 'DC'], ['provincia', '=', Auth::user()->provincia]])->count();

        //dm
        $data['ac'] = DB::table('alunos')
            ->join('turmas', 'turmas.id', 'alunos.turma_id')
            ->join('classes', 'classes.id', 'turmas.classe_id')
            ->where([['municipio', '=', Auth::user()->municipio]])
            ->count();

        //dc
        $data['sp_dc'] = User::where([['tipo_user', '=', 'SP'], ['instituicao', '=', Auth::user()->instituicao]])->count();
        $data['v_dc'] = User::where([['tipo_user', '=', 'V'], ['instituicao', '=', Auth::user()->instituicao]])->count();

        $data['alunos'] = DB::table('alunos')
            ->join('turmas', 'turmas.id', 'alunos.turma_id')
            ->join('classes', 'classes.id', 'turmas.classe_id')
            ->where([['centroexame', '=', Auth::user()->instituicao]])
            ->count();
        $data['defAluno'] = DB::table('alunos')
            ->join('turmas', 'turmas.id', 'alunos.turma_id')
            ->join('classes', 'classes.id', 'turmas.classe_id')
            ->where([['centroexame', '=', Auth::user()->instituicao], ['deficiencia', '!=', 'Nenhum']])
            ->count();

             $data['c'] = CentroExame::where([['municipio', '=', Auth::user()->municipio]])->count();

        return view('dashboard.home.index', compact('centro3', 'total_aluno', 'sp_centro', 'total_sp', 'v_centro', 'total_v'), $data);
    }
}
