@extends('layouts._includes.dashboard.Header')
@section('title','Editar director Municipal')
@section('content')
<style>
    .center{
  margin: 0 auto;
}
</style>
<div class="col-md-8 center">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Editar Director Municipal</h4>
        @include('extra.errorInputs.index')
        <form class="forms-sample" method="POST" action="{{ route('update_dm',$users->id) }}">
            @csrf
          @include('forms._FormUserDM.index')

          <button type="submit" class="btn btn-primary mr-2">Actualizar</button>

        </form>
      </div>
    </div>

</div>
@include('layouts._includes.dashboard.Footer')
@endsection
