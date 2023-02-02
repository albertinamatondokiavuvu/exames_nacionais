<?php

namespace App\Http\Controllers;

use App\Models\centroExameExame;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $dp= User::where([['tipo_user','=','DP']])->count();
        $dm= User::where([['tipo_user','=','DM'],['provincia','=',Auth::user()->provincia]])->count();
        $dc= User::where([['tipo_user','=','DC'],['provincia','=',Auth::user()->provincia]])->count();
        $alunos = DB::table('alunos')
        ->join('turmas','turmas.id','alunos.turma_id')
        ->join('classes','classes.id','turmas.classe_id')
        ->where([['centroexame','=',Auth::user()->instituicao]])
        ->count();
        $defAluno = DB::table('alunos')
        ->join('turmas','turmas.id','alunos.turma_id')
        ->join('classes','classes.id','turmas.classe_id')
        ->where([['centroexame','=',Auth::user()->instituicao],['deficiencia','!=','Nenhum']])
        ->count();
        return view('dashboard.home.index',compact('dp','dm','dc','alunos','defAluno'));
    }
}
