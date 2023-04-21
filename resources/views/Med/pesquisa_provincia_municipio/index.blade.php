@extends('layouts._includes.dashboard.Header')
@section('title','Pesquisar Informações')
@section('content')
<style>
    .form-control{
 border:1px black;
    }
    .center{
    margin: 0 auto;
    }
    #municipio option{
    display: none;
}
</style>

<div class="col-md-8 center">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Pesquisar Informações</h4>
        @include('extra.errorInputs.index')
        <form class="forms-sample" method="POST" action="{{ route('takeProvince') }}">
            @csrf
            <div class="row g-3 mb-3">
                <div class="col-sm">
                    <select name="provincia" id="provincia" class="form-control">
                        <option value="" disabled selected>Selecione a província</option>
                       @include('extra.provincias.index')
                    </select>
                </div>
                <div class="col-sm">
                    <select name="municipio" id="municipio" class="form-control">
                        <option value="" disabled selected>Selecione o município</option>
                       @include('extra.municipio.Bengo.index')
                       @include('extra.municipio.Benguela.index')
                       @include('extra.municipio.Bie.index')
                       @include('extra.municipio.Cabinda.index')
                       @include('extra.municipio.Cuando_Cubango.index')
                       @include('extra.municipio.Cuanza_norte.index')
                       @include('extra.municipio.cuanza_sul.index')
                       @include('extra.municipio.Cunene.index')
                       @include('extra.municipio.Huambo.index')
                       @include('extra.municipio.Huila.index')
                       @include('extra.municipio.Luanda.index')
                       @include('extra.municipio.Lunda_norte.index')
                       @include('extra.municipio.Lunda_sul.index')
                       @include('extra.municipio.Malanje.index')
                       @include('extra.municipio.Moxico.index')
                       @include('extra.municipio.Namibe.index')
                       @include('extra.municipio.Uige.index')
                       @include('extra.municipio.Zaire.index')

                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Procurar</button>
        </form>
      </div>
    </div>
</div>

@include('layouts._includes.dashboard.Footer')
@endsection
