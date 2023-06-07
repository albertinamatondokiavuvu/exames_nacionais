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
        $data[] = Null;
        if(Auth::user()->tipo_user == "admin")
        {
            $data['alunos']=Aluno::count();
            $data['alunosDef']= Aluno::where([['deficiencia','<>','Nenhum']])->count();
            $data['auditiva']= Aluno::where([['deficiencia','=','Auditiva']])->count();
            $data['visual']= Aluno::where([['deficiencia','=','Visual']])->count();
            $data['centros']= CentroExame::count();
             $data['alunos1']=DB::table('alunos')
            ->join('turmas','turmas.id','alunos.turma_id')
            ->join('classes','classes.id','turmas.classe_id')
            ->select(array('alunos.provincia', DB::raw('COUNT(nome_aluno) as alunos'),DB::raw('COUNT(DISTINCT turma_id) as turmas'),DB::raw('COUNT( DISTINCT centroexame) as centros')))
            ->groupBy('provincia')
            ->get();

        }elseif(Auth::user()->tipo_user == "DP")
        {
            $data['dMs']= User::where([['tipo_user','=','DM'],['provincia','=',Auth::user()->provincia]])->count();
            $data['dCs']= User::where([['tipo_user','=','DC'],['provincia','=',Auth::user()->provincia]])->count();
            $data['centrosP']= CentroExame::where([['provincia','=',Auth::user()->provincia]])->count();
        }elseif(Auth::user()->tipo_user == "DM")
        {
            $data['dCsM']= User::where([['tipo_user','=','DC'],['provincia','=',Auth::user()->provincia],['municipio','=',Auth::user()->municipio]])->count();
            $data['centrosM']= CentroExame::where([['provincia','=',Auth::user()->provincia],['municipio','=',Auth::user()->municipio]])->count();
            $data['alunosM']=Aluno::where([['provincia','=',Auth::user()->provincia],['municipio','=',Auth::user()->municipio]])->count();
        }elseif(Auth::user()->tipo_user == "DC")
        {
            $data['SPC']= User::where([['tipo_user','=','SP'],['provincia','=',Auth::user()->provincia],['municipio','=',Auth::user()->municipio],['instituicao','=',Auth::user()->instituicao]])->count();
            $data['VC']= User::where([['tipo_user','=','V'],['provincia','=',Auth::user()->provincia],['municipio','=',Auth::user()->municipio],['instituicao','=',Auth::user()->instituicao]])->count();
            $data['alunosC']=Aluno::join("turmas", "turmas.id", "=", "alunos.turma_id")
            ->where([
            ['provincia','=',Auth::user()->provincia],
            ['municipio','=',Auth::user()->municipio],
            ['centroexame','=',Auth::user()->instituicao]])->count();
        }elseif(Auth::user()->tipo_user == "SP")
        {
            $data['alunosSP']=Aluno::join("turmas", "turmas.id", "=", "alunos.turma_id")
            ->where([
            ['provincia','=',Auth::user()->provincia],
            ['municipio','=',Auth::user()->municipio],
            ['centroexame','=',Auth::user()->instituicao]])->count();
            $data['alunosDefSP']= Aluno::join("turmas", "turmas.id", "=", "alunos.turma_id")
            ->where([
            ['provincia','=',Auth::user()->provincia],
            ['municipio','=',Auth::user()->municipio],
            ['centroexame','=',Auth::user()->instituicao],
            ['deficiencia','<>','Nenhum']])->count();
        }
        return view('dashboard.home.index',$data)->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
