<?php

namespace App\Http\Controllers;

use App\Models\CentroExame;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        if(Auth::user()->provincia != NUll)
        {
            $c= CentroExame::where([['provincia','=',Auth::user()->provincia]])->count();
        }
       else{
        $c=0;
       }
        return view('dashboard.home.index',compact('dp','dm','dc','c'));
    }
}
