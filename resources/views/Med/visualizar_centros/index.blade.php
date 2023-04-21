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
                    <table  class="table table-hover table_id">
                      <thead class="">
                            <th>Nº</th>
                            <th class="text-center">Nome da Turma</th>
                            <th class="text-center">Classe</th>
                            <th class="text-center">quantidade de alunos</th>
                            <th class="text-center">Alunos Com deficiência</th>
                            <th class="text-center">Total de alunos</th>
                            <th>Acções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alunos1 as $alunos1)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td class="text-center">{{ $alunos1->nome_turma }}</td>
                                    <td class="text-center">{{ $alunos1->nome_classe }}</td>
                                    <td class="text-center">{{ $alunos1->quantidade }}</td>
                                    <td class="text-center">
                                        <?php

                                        $alu = App\Models\Aluno::where([['deficiencia', '!=', 'Nenhum'], ['turma_id', '=', $alunos1->id]])->count();
                                        echo $alu;

                                        ?></td>
                                        <td class="text-center">
                                            <?php

                                            $alu = App\Models\Aluno::where([['turma_id', '=', $alunos1->id]])->count();
                                            echo $alu;

                                            ?></td>
                                            <td>
                                                <a class="btn btn-primary" target="_blank"
                                                href="{{ route('Aluno_pdf_sp_med', $alunos1->id) }}">Ver Alunos</a>
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
