@extends('layouts._includes.dashboard.Header')
@section('title','Criar Secretários e Vigilantes')
@section('content')
<style>
    .center{
  margin: 0 auto;
}
</style>
<div class="col-md-8 center">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Director Secretários e Vigilantes</h4>
        @include('extra.errorInputs.index')
        <form class="forms-sample" method="POST" action="{{ route('store') }}">
            @csrf
          @include('forms._FormUserSP_PV.index')

          <button type="submit" class="btn btn-primary mr-2">Salvar</button>

        </form>
      </div>
    </div>

</div>
@include('layouts._includes.dashboard.Footer')
@endsection
