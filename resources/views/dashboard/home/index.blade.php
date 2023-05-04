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
                                <h1 class="mb-0">{{ $alunos }}</h1>
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
                                <h1 class="mb-0">{{ $alunosDef }}</h1>
                            </div>
                            <a href="" class="btn btn-primary">Visual__{{ $visual }} <br>
                                Auditiva__{{ $auditiva }}</a>
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
                                <h1 class="mb-0">{{ $centros }}</h1>

                            </div>
                            <!-- <a href="" target="_blank" class="btn btn-primary">Imprimir</a>-->
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
                                    {{ $dMs }}
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
                                    {{ $dCs }}
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
                                    {{ $centrosP }}
                                </h1>
                            </div>
                            <a href="{{ route('viewsearch') }}" class="btn btn-primary">Ver mais</a>
                        </div>
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
                                <h1 class="mb-0">{{ $dCsM }}</h1>
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
                                <h1 class="mb-0">{{ $centrosM }}</h1>
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
                                <h1 class="mb-0">{{ $alunosM }}</h1>
                            </div>
                           <a href="{{ url('view_provincia', [Auth::user()->provincia, Auth::user()->municipio])}}" class="btn btn-primary">Ver</a>
                        </div>
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
                                <h1 class="mb-0">{{ $alunosC }}</h1>
                            </div>
                            <a href="{{ route('searchAluno') }}" class="btn btn-primary">Imprimir</a>
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
                                <h1 class="mb-0">{{ $SPC }}</h1>
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
                                <h1 class="mb-0">{{ $VC }}</h1>
                            </div>
                            <a href="{{ route('v_dc_report') }}" target="_blank" class="btn btn-primary">Imprimir</a>
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
                                <h1 class="mb-0">{{ $alunosSP }}</h1>
                            </div>

                            <a href="{{ route('searchAluno') }}" class="btn btn-primary">Imprimir</a>

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
                                <h1 class="mb-0">{{ $alunosDefSP }}</h1>
                            </div>

                            <a href="{{ route('Aluno_pdf_sp_def') }}" target="_blank"
                                class="btn btn-primary">Imprimir</a>

                        </div>
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
