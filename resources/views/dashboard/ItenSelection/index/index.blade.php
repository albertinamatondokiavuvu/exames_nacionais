@extends('layouts._includes.dashboard.Header')
@section('title','Itens - Dashboard')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Itens de Selecção do(a) aluno(a) - <span style="font-weight: bold;">{{ isset($alunos->nome_aluno) ? $alunos->nome_aluno : '' }}</span></h4>

        <div class="table-responsive">
          <table  class="table table-hover table_id">
            <thead class="">
                <th>Nº</th>
                <th class="text-center" colspan="2" >Item de Selecção</th>
                <th>Item de Construção</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($selections as $selections)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td class="text-center">Disciplina: {{ $selections->codigo_disciplina }}</td>
                    <td class="text-center">Folha: {{ $selections->codigo_folha }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-clone" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item btn btn-danger "

                                href="{{ route('ItenConstruction_add',$selections->id) }}">Inserir</a>
                                <a class="dropdown-item btn btn-danger "

                                href="{{ route('ItenConstruction_index',$selections->id) }}">Listar</a>

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
