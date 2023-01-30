@extends('layouts._includes.dashboard.Header')
@section('title','Editar directores provinciais')
@section('content')
<style>
    .center{
  margin: 0 auto;
}
</style>
<div class="col-md-8 center">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Editar Director Provincial</h4>
        @include('extra.errorInputs.index')
        <form class="forms-sample" method="POST" action="{{ route('update_dp',$users->id) }}">
            @csrf
          @include('forms._FormUserDP.index')
          <button type="submit" class="btn btn-primary mr-2">Actualizar</button>

        </form>
      </div>
    </div>

</div>
@include('layouts._includes.dashboard.Footer')
@endsection
