@extends('layouts._includes.dashboard.Header')
@section('title', 'exames nacionais')
@section('content')
    @include('extra.grafics.index')
    @if (Auth::user()->tipo_user == 'admin')

        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Total de Alunos</p>
                                <h1 class="mb-0">{{ $total_alunos }}</h1>
                            </div>
                            <a href="{{ route('viewsearch') }}" class="btn btn-primary">Imprimir</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Alunos Com deficiências </p>
                                <h1 class="mb-0">{{ $total_alunos_def }}</h1>
                            </div>
                           <!-- <a href="" target="_blank" class="btn btn-primary">Imprimir</a>-->
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Total de Centro de exame</p>
                                <h1 class="mb-0"> {{ $total_centroexame }}</h1>
                            </div>
                           <!-- <a href="" target="_blank" class="btn btn-primary">Imprimir</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 grid-margin stretch-card flex-column">
            <h5 class="mb-2 text-titlecase mb-4"></h5>
            <div class="row h-100">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start flex-wrap">
                                <div>
                                    <p class="mb-3">Gráficos</p>
                                </div>
                                <div id="income-chart-legend" class="d-flex flex-wrap mt-1 mt-md-0"></div>
                            </div>
                            <canvas id="income-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif(Auth::user()->tipo_user == 'DP')
        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Directores Municipais</p>
                                <h1 class="mb-0">
                                    @isset($dm)
                                        {{ $dm }}
                                    @else
                                    @endisset
                                </h1>
                            </div>
                            <a href="{{ route('DM_PDF_DP') }}" target="_blank" class="btn btn-primary">Imprimir</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Directores de Centros </p>
                                <h1 class="mb-0">
                                    @isset($dc)
                                        {{ $dc }}
                                    @else
                                        0
                                    @endisset
                                </h1>
                            </div>
                            <a href="{{ route('DC_PDF_DP') }}" target="_blank" class="btn btn-primary">Imprimir</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Centro de exame</p>
                                <h1 class="mb-0">
                                    @isset($c)
                                        {{ $c }}
                                    @else
                                        0
                                    @endisset
                                </h1>
                            </div>
                            <a href="{{ route('viewsearch') }}" class="btn btn-primary">Ver mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="card-title">Alunos por Munícipio</p>
                        </div>
                        <canvas id="myChart6" width="100" height="100"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="card-title">Centros de exames por Município</p>
                        </div>
                        <canvas id="myChart7" width="100" height="100"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="card-title">Secretários por município</p>
                        </div>
                        <canvas id="myChart8" width="100" height="100"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="card-title">Vigilantes por município</p>
                        </div>
                        <canvas id="myChart9" width="100" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
    @elseif(Auth::user()->tipo_user == 'DM')
        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Directores de Centro de exame</p>
                                <h1 class="mb-0">{{ $dc }}</h1>
                            </div>
                            <a href="{{ route('DC_PDF_DM') }}" target="_blank" class="btn btn-primary">Imprimir</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Total Centro de exame</p>
                                <h1 class="mb-0">{{ $c }}</h1>
                            </div>
                          <!-- <a href="" target="_blank" class="btn btn-primary">Imprimir</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Total de Alunos</p>
                                <h1 class="mb-0">{{ $ac }}</h1>
                            </div>
                           <!-- <a href="" target="_blank" class="btn btn-primary">Imprimir</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="card-title">Alunos Por centro de exame</p>
                        </div>
                        <canvas id="myChart2" width="100" height="100"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="card-title">Secretários por centro de exame</p>
                        </div>
                        <canvas id="myChart4" width="100" height="100"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="card-title">Vigilantes por centro de exame</p>
                        </div>
                        <canvas id="myChart5" width="400" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    @elseif(Auth::user()->tipo_user == 'DC')
        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Total de Aluno</p>
                                <h1 class="mb-0">{{ $alunos }}</h1>
                            </div>
                            <a href="{{ route('searchAluno') }}"  class="btn btn-primary">Imprimir</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Total de Secretários </p>
                                <h1 class="mb-0">{{ $sp_dc }}</h1>
                            </div>
                            <a href="{{ route('sp_dc_report') }}" target="_blank" class="btn btn-primary">Imprimir</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Total Vigilantes</p>
                                <h1 class="mb-0">{{ $v_dc }}</h1>
                            </div>
                            <a href="{{ route('v_dc_report') }}" target="_blank" class="btn btn-primary">Imprimir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 grid-margin stretch-card flex-column">
            <h5 class="mb-2 text-titlecase mb-4"></h5>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="card-title">Alunos Por ano</p>
                            </div>
                            <canvas id="myChart1" width="100" height="100"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="card-title">Alunos Por Gênero</p>
                            </div>
                            <canvas id="myChart3" width="400" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif(Auth::user()->tipo_user == 'SP')
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Total de Alunos</p>
                                <h1 class="mb-0">{{ $alunos }}</h1>
                            </div>
                            @if ($alunos == 0)
                            @else
                                <a href="{{ route('searchAluno') }}"
                                    class="btn btn-primary">Imprimir</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Total de Deficientes</p>
                                <h1 class="mb-0">{{ $defAluno }}</h1>
                            </div>
                            @if ($defAluno == 0)
                            @else
                                <a href="{{ route('Aluno_pdf_sp_def') }}" target="_blank"
                                    class="btn btn-primary">Imprimir</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="card-title">Alunos Por ano</p>
                        </div>
                        <canvas id="myChart1" width="100" height="100"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="card-title">Alunos Por Gênero</p>
                        </div>
                        <canvas id="myChart3" width="400" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    @elseif(Auth::user()->tipo_user == 'V')
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="card-title">Alunos Por ano</p>
                        </div>
                        <canvas id="myChart1" width="100" height="100"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="card-title">Alunos Por Gênero</p>
                        </div>
                        <canvas id="myChart3" width="400" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>

    @endif
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">
        var labels = {{ $year }};
        var users = {{ $user }};

        const data = {
            labels: labels,
            datasets: [{
                label: 'Alunos por ano',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: users,
            }]
        };

        const config = {
            type: 'polarArea',
            data: data,
            options: {}
        };

        const myChart = new Chart(
            document.getElementById('myChart1'),
            config
        );
    </script>

    <script>
        var ctx1 = document.getElementById('myChart3').getContext('2d');
        var chart1 = new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: ['Feminino', 'Masculino'],
                datasets: [{
                    label: 'Utentes por gênero',
                    backgroundColor: ['yellow', 'blue'],
                    borderColor: 'white',
                    data: ['<?php echo $feminino; ?>', ' <?php echo $masculino; ?>'],
                }],
            },
            // Configuration options go here
            options: {
                scales: {
                    yAxes: [{
                        stacked: false
                    }]
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Alunos por Gênero'
                },
            }
        });
    </script>
    <!--dm-->
    <script>
        const ctx = document.getElementById('myChart2');

        new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: {{ Js::from($centro3) }},
                datasets: [{
                    label: 'Alunos por Centros de exames',
                    data: {{ $total_aluno }},
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
 <script>
    const ctx3 = document.getElementById('myChart4');

    new Chart(ctx3, {
        type: 'polarArea',
        data: {
            labels: {{ Js::from($sp_centro) }},
            datasets: [{
                label: 'Secretários por Centros de exames',
                data: {{ $total_sp }},
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<script>
    const ctx4 = document.getElementById('myChart5');

    new Chart(ctx4, {
        type: 'polarArea',
        data: {
            labels: {{ Js::from($v_centro) }},
            datasets: [{
                label: 'Vigilantes por Centros de exames',
                data: {{ $total_v }},
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>




    @include('layouts._includes.dashboard.Footer')
@endsection
