<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CentroExame;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //DP
    public function user_add_dp()
    {
        return view('dashboard.Users.DP.create.index');
    }
    public function store_dp(Request $request)
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
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'provincia' => 'required',
                'telefone' => 'required|min:9|max:9|unique:users',
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ],
            $mensagens
        );

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'tipo_user' => 'DP',
                'provincia' => $request->provincia,
                'telefone' => $request->telefone,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->back()->with('status_add', '1');
        } catch (\Exception $exceptio) {
            return redirect()->back()->with('status_error', '1');
        }
    }
    public function user_edit_dp($id)
    {
        $users = User::find($id);
        return view('dashboard.Users.DP.edit.index', compact('users'));
    }
    public function update_dp(Request $request, $id)
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
                'name' => 'required',
                'email' => 'email',
                'provincia' => 'required',
                'telefone' => 'required|min:9|max:9',
            ],
            $mensagens
        );

        try {
            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'provincia' => $request->provincia,
                'telefone' => $request->telefone,
            ]);
            return redirect()->back()->with('status_update', '1');
        } catch (\Exception $exceptio) {
            return redirect()->back()->with('status_error', '1');
        }
    }
    public function index_dp()
    {
        $users = User::where([['tipo_user', '=', 'DP']])->get();
        return view('dashboard.Users.DP.index.index', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    //DM
    public function user_add_dm()
    {
        return view('dashboard.Users.DM.create.index');
    }
    public function store_dm(Request $request)
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
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'municipio' => 'required',
                'telefone' => 'required|min:9|max:9|unique:users',
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ],
            $mensagens
        );
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'tipo_user' => 'DM',
                'provincia' => Auth::user()->provincia,
                'municipio' => $request->municipio,
                'telefone' => $request->telefone,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->back()->with('status_add', '1');
        } catch (\Exception $exceptio) {
            return redirect()->back()->with('status_error', '1');
        }
    }
    public function user_edit_dm($id)
    {
        $users = User::find($id);
        return view('dashboard.Users.DM.edit.index', compact('users'));
    }
    public function update_dm(Request $request, $id)
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
                'name' => 'required',
                'email' => 'required|email',
                'municipio' => 'required',
                'telefone' => 'required|min:9|max:9',
            ],
            $mensagens
        );
        try {
            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'municipio' => $request->municipio,
                'telefone' => $request->telefone,
            ]);
            return redirect()->back()->with('status_update', '1');
        } catch (\Exception $exceptio) {
            return redirect()->back()->with('status_error', '1');
        }
    }
    public function index_dm()
    {
        $users = User::where([['tipo_user', '=', 'DM'], ['provincia', '=', Auth::user()->provincia]])->get();
        return view('dashboard.Users.DM.index.index', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    //DC
    public function user_add_dc()
    {
        $centros = CentroExame::where([['provincia','=',Auth::user()->provincia],['municipio','=',Auth::user()->municipio]])->get();
        return view('dashboard.Users.DC.create.index', compact('centros'));
    }
    public function store_dc(Request $request)
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
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'instituicao' => 'required',
                'telefone' => 'required|min:9|max:9|unique:users',
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ],
            $mensagens
        );
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'tipo_user' => 'DC',
                'instituicao' => $request->instituicao,
                'provincia' => Auth::user()->provincia,
                'municipio' => Auth::user()->municipio,
                'telefone' => $request->telefone,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->back()->with('status_add', '1');
        } catch (\Exception $exceptio) {
            return redirect()->back()->with('status_error', '1');
        }
    }
    public function user_edit_dc($id)
    {
        $users = User::find($id);
        $centros = CentroExame::where([['provincia','=',Auth::user()->provincia],['municipio','=',Auth::user()->municipio]])->get();
        return view('dashboard.Users.DC.edit.index', compact('users','centros'));
    }
    public function update_dc(Request $request, $id)
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
                'name' => 'required',
                'email' => 'required|email',
                'instituicao' => 'required',
                'telefone' => 'required|min:9|max:9',
            ],
            $mensagens
        );
        try {
            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'instituicao' => $request->instituicao,
                'telefone' => $request->telefone,
            ]);
            return redirect()->back()->with('status_update', '1');
        } catch (\Exception $exceptio) {
            return redirect()->back()->with('status_error', '1');
        }
    }
    public function index_dc()
    {
        $users = User::where([['tipo_user', '=', 'DC'], ['municipio', '=', Auth::user()->municipio]])->get();
        return view('dashboard.Users.DC.index.index', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    //SP_PV
    public function user_add()
    {
        return view('dashboard.Users.SP_PV.create.index');
    }
    public function store(Request $request)
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
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'telefone' => 'required|min:9|max:9|unique:users',
                'tipo_user' => 'required',
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ],
            $mensagens
        );
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'tipo_user' => $request->tipo_user,
                'provincia' => Auth::user()->provincia,
                'instituicao' => Auth::user()->instituicao,
                'municipio' => Auth::user()->municipio,
                'telefone' => $request->telefone,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->back()->with('status_add', '1');
        } catch (\Exception $exceptio) {
            return redirect()->back()->with('status_error', '1');
        }
    }
    public function user_edit($id)
    {
        $users = User::find($id);
        return view('dashboard.Users.SP_PV.edit.index', compact('users'));
    }
    public function update(Request $request, $id)
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
                'name' => 'required',
                'email' => 'required|email',
                'tipo_user' => 'required',
                'telefone' => 'required|min:9|max:9',
            ],
            $mensagens
        );
        try {
            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'tipo_user' => $request->tipo_user,
                'telefone' => $request->telefone,
            ]);
            return redirect()->back()->with('status_update', '1');
        } catch (\Exception $exceptio) {
            return redirect()->back()->with('status_error', '1');
        }
    }
    public function index()
    {
        $users = User::WhereIn('tipo_user', ['SP', 'V'])->where([['municipio', '=', Auth::user()->municipio],['instituicao', '=', Auth::user()->instituicao]])->get();
        return view('dashboard.Users.SP_PV.index.index', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    //coisas gerais
    public function delete($id)
    {
        try {
            $users = User::findOrFail($id);
            $users->delete();
            return redirect()->back()->with('status_delete', '1');
        } catch (\Exception $exceptio) {
            return redirect()->back()->with('status_error', '1');
        }
    }
    public function UpdatePassword(Request $request, $id)
    {
        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
            'confirmed' => ' as palavra-passes não condizem'
        ];
        $request->validate(
            [
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ],
            $mensagens
        );
        try {
            User::find($id)->update([
                'password' => Hash::make($request->password)
            ]);
            return redirect()->back()->with('UpdatePassword', '1');
        } catch (\Exception $exceptio) {
            return redirect()->back()->with('status_error', '1');
        }
    }
}
