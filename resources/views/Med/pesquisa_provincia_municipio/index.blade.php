@extends('layouts._includes.dashboard.Header')
@section('title','Pesquisar Informações')
@section('content')
<style>
    .center{
    margin: 0 auto;
    }
</style>

<div class="col-md-8 center">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Pesquisar Informações</h4>
        @include('extra.errorInputs.index')
        <form class="forms-sample" method="POST" action="">
            @csrf
            <div class="row g-3 mb-3">
                <div class="col-sm">
                    <select name="provincia " id="provincia" class="form-control multiplo">
                        <option value="" disabled selected>Selecione a província</option>
                        @include('extra.provincias.index')
                    </select>
                </div>
                <div class="col-sm">
                    <select name="municipio" id="municipio" class="form-control multiplo">
                        <option value="" disabled selected>Selecione o município</option>
                        <option value="Todos">Todos</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Salvar</button>
        </form>
      </div>
    </div>
</div>
@include('layouts._includes.dashboard.Footer')
@endsection
