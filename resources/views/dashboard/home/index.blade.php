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
                      <p class="mb-2 text-md-center text-lg-left">Total de centroExames de Exames</p>
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
                        <p class="mb-3">Monthly Increase</p>
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
                      <p class="mb-2 text-md-center text-lg-left">centroExames de exames</p>
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
                        <p class="mb-3">Monthly Increase</p>
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
                      <p class="mb-2 text-md-center text-lg-left">Directores de centroExames</p>
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
                      <p class="mb-2 text-md-center text-lg-left">Total centroExames de Exames</p>
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
                        <p class="mb-3">Monthly Increase</p>
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
                      <p class="mb-2 text-md-center text-lg-left">centroExames de Exames</p>
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
                        <p class="mb-3">Monthly Increase</p>
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
            <div class="col-md-12 grid-margin stretch-card">
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

          </div>
          <div class="col-xl-12 grid-margin stretch-card flex-column">
            <h5 class="mb-2 text-titlecase mb-4"></h5>
            <div class="row h-100">
              <div class="col-md-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start flex-wrap">
                      <div>
                        <p class="mb-3">Monthly Increase</p>
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
                            <p class="mb-3">Monthly Increase</p>
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
