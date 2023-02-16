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
->selectRaw('centroexame as centro3,COUNT(*) as count')->groupBy('centro3')->get();


    $centro3 = json_encode($centro_aluno->pluck('centro3'));
    $total_aluno = json_encode($centro_aluno->pluck('count'));


$centro_sp= User::where([['tipo_user','=','SP'],['municipio', '=', Auth::user()->municipio]])
->selectRaw('instituicao as sp_centro,COUNT(*) as count')->groupBy('sp_centro')->get();


    $sp_centro =json_encode($centro_sp->pluck('sp_centro'));
    $total_sp = json_encode($centro_sp->pluck('count'));

$centro_v= User::where([['tipo_user','=','SP'],['municipio', '=', Auth::user()->municipio]])
->selectRaw('instituicao as v_centro,COUNT(*) as count')->groupBy('v_centro')->get();


    $v_centro =json_encode($centro_v->pluck('v_centro'));
    $total_v = json_encode($centro_v->pluck('count'));


        //V
        $tes = Aluno::get();
        $ano = Aluno::selectRaw('YEAR(created_at) as year,COUNT(*) as count')->groupBy('year')->get();

        $data = [
            'year' => json_encode($ano->pluck('year')),
            'user' => json_encode($ano->pluck('count')),
        ];
        $data['masculino']=0;
        $data['feminino']=0;
      foreach($tes as $teb)
       {
        $data['feminino'] = Aluno::where('sexo','=','Feminino')->count();
        $data['masculino'] = Aluno::where('sexo','=','Masculino')->count();
       }
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
        return view('dashboard.home.index',compact('centro3','total_aluno','sp_centro','total_sp','v_centro','total_v'),$data);
    }
}
