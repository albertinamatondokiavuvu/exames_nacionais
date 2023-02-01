@extends('layouts._includes.dashboard.Header')
@section('title','Pesquisar centroExames de exames')
@section('content')
<style>
    .center{
  margin: 0 auto;
}
</style>
<div class="col-md-8 center">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Pesquisar centroExames de Exames</h4>
        @include('extra.errorInputs.index')
        <form class="forms-sample" method="POST" action="{{ route('store_dc') }}">
            @csrf
            <div class="form-group col-md-3">
                <label for="vc_nome" class="form-label">Provincia</label>
                <select name="vc_nome" id="vc_nome" class="form-control">
                    <option value="Todos">Todos</option>
                    @foreach ($utilizadores as $provincia)
                    <option value="{{ $provincia->provincia}}">
                        {{ $provincia->provincia }}
                    </option>
                    @endforeach
                </select>

            </div>
            <div class="form-group col-md-3">
                <label for="municipio" class="form-label">Municipio</label>
                <select name="municipio" id="municipio" class="form-control">
                    <option value="Todos">Todos</option>
                    @foreach ($utilizador as $municipio)
                    <option value="{{ $municipio->municipio}}">
                        {{ $municipio->municipio }}
                    </option>
                    @endforeach
                </select>

            </div>
          <a target="_blank" type="submit" class="btn btn-primary mr-2">Imprimir</a>
        </form>
      </div>
    </div>

</div>
@include('layouts._includes.dashboard.Footer')
@endsection
