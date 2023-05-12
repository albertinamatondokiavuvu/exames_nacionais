@extends('layouts._includes.dashboard.Header')
@section('title', 'alunos - Dashboard')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">alunos</h4>

                <div class="table-responsive">
                    <table  class="table table-hover table_id">
                        <thead class="">
                            <tr>
                            <th>Nº</th>
                            <th class="text-center">Nome do Aluno</th>
                            <th class="text-center">Item de Seleção</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alunos as $alunos)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td class="text-center">{{ $alunos->nome_aluno }}</td>

                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-clone" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item btn btn-danger "
                                                href="{{ route('ItenSelection_add',$alunos->id) }}">Inserir</a>
                                                <a class="dropdown-item btn btn-danger "
                                                href="{{ route('ItenSelection_index',$alunos->id) }}">Listar</a>
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
