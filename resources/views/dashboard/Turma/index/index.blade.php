@extends('layouts._includes.dashboard.Header')
@section('title','Turmas - Dashboard')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Turmas</h4>

        <div class="table-responsive">
          <table id="table_id" class="table table-hover">
            <thead class="">
                <th>Nº</th>
                <th class="text-center">Turma</th>
                <th class="text-center">Quantidade</th>
                <th class="text-center">Classe</th>
                <th class="text-center">centro de exame</th>
                <th>Acções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($turmas as $turmas)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td class="text-center">{{ $turmas->nome_turma }}</td>
                    <td class="text-center">{{ $turmas->quantidade }}</td>
                    <td class="text-center">{{ $turmas->nome_classe }}</td>
                    <td class="text-center">{{ $turmas->centroexame }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-clone" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item btn btn-danger "

                                href="{{ route('turma_edit',$turmas->id) }}">Editar</a>
                                <form action="{{ route('delete',$turmas->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <a class="dropdown-item btn btn-danger remove-user"
                                        data-confirm="Tem certeza que deseja eliminar?"
                                        href="{{ route('delete_turma',$turmas->id) }}">Eliminar</a>
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
