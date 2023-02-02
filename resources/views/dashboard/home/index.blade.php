@extends('layouts._includes.dashboard.Header')
@section('title','exmes nacionais')
@section('content')


          @if(Auth::user()->tipo_user == "admin")

          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Total de Alunos</p>
                      <h1 class="mb-0">8742</h1>
                    </div>
                   <a href="" class="btn btn-primary">Imprimir</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Alunos Com deficiências </p>
                      <h1 class="mb-0">47,840</h1>
                    </div>
                    <a href="" class="btn btn-primary">Imprimir</a>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Total de Centro de exame</p>
                      <h1 class="mb-0">$7,243</h1>
                    </div>
                    <a href="" class="btn btn-primary">Imprimir</a>
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
                        <h3>67842</h3>
                      </div>
                      <div id="income-chart-legend" class="d-flex flex-wrap mt-1 mt-md-0"></div>
                    </div>
                    <canvas id="income-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @elseif(Auth::user()->tipo_user == "DP")

          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Directores Municipais</p>
                      <h1 class="mb-0">@isset($dm)
                        {{ $dm }}
                        @else


                      @endisset</h1>
                    </div>
                    <a href="" class="btn btn-primary">Imprimir</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Directores de centroExames </p>
                      <h1 class="mb-0">@isset($dc){{ $dc }}
                    @else
                0
            @endisset</h1>
                    </div>
                    <a href="" class="btn btn-primary">Imprimir</a>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Centro de exame</p>
                      <h1 class="mb-0">@isset($c)
                        {{ $c }}
                    @else
                0
            @endisset</h1>
                    </div>
                    <a href="" class="btn btn-primary">Imprimir</a>
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
                        <h3>67842</h3>
                      </div>
                      <div id="income-chart-legend" class="d-flex flex-wrap mt-1 mt-md-0"></div>
                    </div>
                    <canvas id="income-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @elseif(Auth::user()->tipo_user == "DM")

          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Directores de Centro de exame</p>
                      <h1 class="mb-0">8742</h1>
                    </div>
                    <a href="" target="_blank" class="btn btn-primary">Imprimir</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Total Centro de exame</p>
                      <h1 class="mb-0">47,840</h1>
                    </div>
                    <a href="" class="btn btn-primary">Imprimir</a>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Total de Alunos</p>
                      <h1 class="mb-0">$7,243</h1>
                    </div>
                    <a href="" class="btn btn-primary">Imprimir</a>
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
                        <h3>67842</h3>
                      </div>
                      <div id="income-chart-legend" class="d-flex flex-wrap mt-1 mt-md-0"></div>
                    </div>
                    <canvas id="income-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @elseif(Auth::user()->tipo_user == "DC")

          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Centro de exame</p>
                      <h1 class="mb-0">8742</h1>
                    </div>
                    <a href="" class="btn btn-primary">Imprimir</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Total de Supervisores </p>
                      <h1 class="mb-0">47,840</h1>
                    </div>
                    <a href="" class="btn btn-primary">Imprimir</a>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Total Vigilantes</p>
                      <h1 class="mb-0">$7,243</h1>
                    </div>
                    <a href="" class="btn btn-primary">Imprimir</a>
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
                        <h3>67842</h3>
                      </div>
                      <div id="income-chart-legend" class="d-flex flex-wrap mt-1 mt-md-0"></div>
                    </div>
                    <canvas id="income-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
            @elseif(Auth::user()->tipo_user == "SP")
           <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Total de Alunos</p>
                      <h1 class="mb-0">{{ $alunos }}</h1>
                    </div>
                    @if($alunos == 0)
                    @else
                    <a href="{{ route('Aluno_pdf_sp') }}" target="_blank" class="btn btn-primary">Imprimir</a>
                @endif
                </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                      <div>
                        <p class="mb-2 text-md-center text-lg-left">Total de Deficientes</p>
                        <h1 class="mb-0">{{ $defAluno }}</h1>
                      </div>
                      @if($defAluno == 0)
                      @else
                      <a href="{{ route('Aluno_pdf_sp_def') }}" target="_blank" class="btn btn-primary">Imprimir</a>
                    @endif
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
                        <h3>67842</h3>
                      </div>
                      <div id="income-chart-legend" class="d-flex flex-wrap mt-1 mt-md-0"></div>
                    </div>
                    <canvas id="income-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
            @elseif(Auth::user()->tipo_user == "V")

              <div class="col-xl-12 grid-margin stretch-card flex-column">
                <h5 class="mb-2 text-titlecase mb-4"></h5>
                <div class="row h-100">
                  <div class="col-md-12 stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start flex-wrap">
                          <div>
                            <p class="mb-3">Gráficos</p>
                            <h3>67842</h3>
                          </div>
                          <div id="income-chart-legend" class="d-flex flex-wrap mt-1 mt-md-0"></div>
                        </div>
                        <canvas id="income-chart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
       @endif


@include('layouts._includes.dashboard.Footer')
@endsection
