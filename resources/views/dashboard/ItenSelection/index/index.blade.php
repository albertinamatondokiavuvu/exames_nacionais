@extends('layouts._includes.dashboard.Header')
@section('title','Itens - Dashboard')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Itens do(a) aluno(a) - <span style="font-weight: bold;">{{ isset($alunos->nome_aluno) ? $alunos->nome_aluno : '' }}</span></h4>

        <div class="table-responsive">
          <table  class="table table-hover table_id">
            <thead class="">
                <th>Nº</th>
                <th>Tipo de Item</th>
                <th class="text-center">Código1 </th>
                <th class="text-center">Código2 </th>
                <th class="text-center">Acção</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($selections as $selections)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td >{{ $selections->tipo }}</td>
                    <td class="text-center">{{ $selections->codigo_disciplina }}</td>
                    <td class="text-center">{{ $selections->codigo_folha }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-clone" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item btn btn-danger "

                                href="{{ route('ItenSelection_edit',$selections->id) }}">Editar</a>
                                <form action="{{ route('delete_item',$selections->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <a class="dropdown-item btn btn-danger remove-user"
                                        data-confirm="Tem certeza que deseja eliminar?"
                                        href="{{ route('delete_item',$selections->id) }}">Eliminar</a>
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
