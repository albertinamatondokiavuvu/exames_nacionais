@extends('layouts._includes.dashboard.Header')
@section('title', 'Pesquisar Informações')
@section('content')
    <style>
        .center {
            margin: 0 auto;
        }
    </style>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Resultados por província e municípios</h4>

                <div class="table-responsive">
                    <table class="table table-hover table_id">
                        <thead class="">
                            <th>Nº</th>
                            <th class="text-center">Nome do Centro</th>
                            <th class="text-center">Quantidade de Turmas</th>
                            <th>Acções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($logs as $logs)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td class="text-center">{{ $logs->nome_centro }}</td>
                                    <td class="text-center">
                                        <?php

                                        $d = App\Models\Turma::where('centroexame', '=', $logs->nome_centro)->count();

                                        echo $d; ?>
                                    </td>

                                    <td>
                                        <a class="btn btn-primary"
                                            href="{{ route('view_turmas_pr', $logs->nome_centro) }}">Ver mais</a>
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
