@extends('layouts._includes.dashboard.Header')
@section('title','Itens - Dashboard')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Itens de Construção do Iten de Selecção: </h4>
        <p> Código da Disciplina: <{{isser($selections->codigo_disciplina)  }}> </p>
        <p> Código de Prova: <{{ isset($selections->codigo_folha)  }}></p>
        <br>

        <div class="table-responsive">
          <table  class="table table-hover table_id">
            <thead class="">
                <th>Nº</th>
                <th class="text-center" colspan="2" >Item de Construção</th>
                <th>Acções</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($constructions as $constructions)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td class="text-center">Disciplina: {{ $constructions->codigo_disciplina }}</td>
                    <td class="text-center">Folha: {{ $constructions->codigo_folha }}</td>

                    <td>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-clone" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item btn btn-danger "

                                href="">Editar</a>

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
