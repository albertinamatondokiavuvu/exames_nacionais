@extends('layouts._includes.dashboard.Header')
@section('title','Pesquisar centro de exames')
@section('content')
<style>
    .center{
  margin: 0 auto;
}
</style>

<div class="col-md-8 center">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Pesquisar Centro de exames</h4>
        @include('extra.errorInputs.index')
        <form class="forms-sample" method="POST" action="{{ route('store_dc') }}">
            @csrf

            <div class="row g-3 mb-3">
                <div class="mb-3">

                    <select name="provincia" id="provincia" class="form-control">
                        <option value="" disabled selected>Selecione a província</option>
                        <option value="Todos">Todos</option>

                    </select>
                </div>

                <div class="col-sm">

                <select name="municipio" id="municipio" class="form-control">
                    <option value="" disabled selected>Selecione o município</option>
                    <option value="Todos">Todos</option>

                </select>
                </div>

            </div>

          <a target="_blank" type="submit" class="btn btn-primary mr-2">Imprimir</a>
        </form>
      </div>
    </div>

</div>
@include('layouts._includes.dashboard.Footer')
@endsection
