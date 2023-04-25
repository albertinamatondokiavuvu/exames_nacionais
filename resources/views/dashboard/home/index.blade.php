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
                                <h1 class="mb-0"></h1>
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
                                <h1 class="mb-0"></h1>
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
                                <h1 class="mb-0"></h1>
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
                                <h1 class="mb-0"></h1>
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
                                <h1 class="mb-0"></h1>
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
                                <h1 class="mb-0"></h1>
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
                                <h1 class="mb-0"></h1>
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
                                <h1 class="mb-0"></h1>
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
                                <h1 class="mb-0"></h1>
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
                                <h1 class="mb-0"></h1>
                            </div>

                                <a href="{{ route('searchAluno') }}"
                                    class="btn btn-primary">Imprimir</a>

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
                                <h1 class="mb-0"></h1>
                            </div>

                                <a href="{{ route('Aluno_pdf_sp_def') }}" target="_blank"
                                    class="btn btn-primary">Imprimir</a>

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


    @include('layouts._includes.dashboard.Footer')
@endsection
