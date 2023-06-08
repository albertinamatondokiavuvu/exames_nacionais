@extends('layouts._includes.dashboard.Header')
@section('title','Criar Item de Selecção')
@section('content')
<style>
    .center{
  margin: 0 auto;
}
</style>
<div class="col-md-8 center">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Item</h4>
        @include('extra.errorInputs.index')
        <form class="forms-sample" method="POST" action="{{ route('ItenSelection_update',$selections->id) }}">
            @csrf
          @include('forms._FormItenSelection.index')

          <button type="submit" class="btn btn-primary mr-2">Actualizar</button>

        </form>
      </div>
    </div>

</div>
@include('layouts._includes.dashboard.Footer')
@endsection
