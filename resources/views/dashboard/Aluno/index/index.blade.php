@extends('layouts._includes.dashboard.Header')
@section('title','alunos - Dashboard')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">alunos</h4>

        <div class="table-responsive">
          <table  class="table table-hover table_id">
            <thead class="">
                <th>Nº</th>
                <th class="text-center">Nome</th>
                <th class="text-center">Turma</th>
                <th class="text-center">Classe</th>
                <th class="text-center">Centro de exame</th>
                <th class="text-center">Escola de Proveniencia</th>
                <th class="text-center">Sexo</th>
                <th class="text-center">Data de nascimento</th>
                <th>Acções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alunos as $alunos)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td class="text-center">{{ $alunos->nome_aluno}}</td>
                    <td class="text-center">{{ $alunos->nome_turma}}</td>
                    <td class="text-center">{{ $alunos->nome_classe}}</td>
                    <td class="text-center">{{ $alunos->centroexame}}</td>
                    <td class="text-center">{{ $alunos->escola_proveniencia}}</td>
                    <td class="text-center">{{ $alunos->sexo}}</td>
                    <td class="text-center">{{ $alunos->data_nasc}}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-clone" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item btn btn-danger "

                                href="{{ route('aluno_edit',$alunos->id) }}">Editar</a>
                                <form action="{{ route('delete_aluno',$alunos->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <a class="dropdown-item btn btn-danger remove-user"
                                        data-confirm="Tem certeza que deseja eliminar?"
                                        href="{{ route('delete_aluno',$alunos->id) }}">Eliminar</a>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@include('layouts._includes.dashboard.Footer')
@endsection
