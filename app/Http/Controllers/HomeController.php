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
        //admin
        $data['total_alunos'] = Aluno::count();
        $data['total_centroexame'] = CentroExame::count();
        $data['total_alunos_def'] = Aluno::where([['deficiencia','!=','Nenhum']])->count();
//DP
        $data['dp']= User::where([['tipo_user','=','DP']])->count();
        $data['dm']= User::where([['tipo_user','=','DM'],['provincia','=',Auth::user()->provincia]])->count();
        $data['dc']= User::where([['tipo_user','=','DC'],['provincia','=',Auth::user()->provincia]])->count();
        $data['c']= CentroExame::where([['provincia','=',Auth::user()->provincia],['municipio','=',Auth::user()->municipio]])->count();
//dm
$data['ac']= DB::table('alunos')
->join('turmas','turmas.id','alunos.turma_id')
->join('classes','classes.id','turmas.classe_id')
->where([['municipio','=',Auth::user()->municipio]])
->count();

//dc
$data['sp_dc'] =User::where([['tipo_user','=','SP'],['instituicao','=',Auth::user()->instituicao]])->count();
$data['v_dc'] =User::where([['tipo_user','=','V'],['instituicao','=',Auth::user()->instituicao]])->count();

        $data['alunos'] = DB::table('alunos')
        ->join('turmas','turmas.id','alunos.turma_id')
        ->join('classes','classes.id','turmas.classe_id')
        ->where([['centroexame','=',Auth::user()->instituicao]])
        ->count();
        $data['defAluno'] = DB::table('alunos')
        ->join('turmas','turmas.id','alunos.turma_id')
        ->join('classes','classes.id','turmas.classe_id')
        ->where([['centroexame','=',Auth::user()->instituicao],['deficiencia','!=','Nenhum']])
        ->count();
        return view('dashboard.home.index',$data);
    }
}
