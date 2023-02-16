@extends('layouts._includes.dashboard.Header')
@section('title', 'alunos - Dashboard')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">alunos</h4>

                <div class="table-responsive">
                    <table id="table_id" class="table table-hover">
                        <thead class="">
                            <tr>
                            <th>Nº</th>
                            <th class="text-center">Identificador</th>
                            <th class="text-center">Código de Prova</th>
                            <th class="text-center">Código de Resposta</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alunos as $alunos)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td class="text-center">{{ $alunos->id }}</td>
                                    <td class="text-center">
                                        @if ($alunos->cod_prova != null)
                                            {{ $alunos->cod_prova }}
                                        @else
                                            <form action="{{ route('prova_update', $alunos->id) }}" method="POST">
                                                @csrf
                                                <input required placeholder="digite aqui o código de prova" type="text" class="form-control mb-2" name="cod_prova">
                                                 <button type="submit" class="btn btn-primary mb-2">Salvar</button>
                                            </form>
                                        @endif

                                    </td>

                                    <td class="text-center">
                                        @if ($alunos->cod_resp_prova != null)
                                            {{ $alunos->cod_resp_prova }}
                                        @else
                                            <form action="{{ route('resposta_update', $alunos->id) }}" method="POST">
                                                @csrf
                                                <input required placeholder="digite aqui o código de resposta" type="text" class="form-control mb-2" name="cod_resp_prova">
                                                 <button type="submit" class="btn btn-primary mb-2">Salvar</button>
                                            </form>
                                        @endif

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
