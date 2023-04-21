@extends('layouts._includes.dashboard.Header')
@section('title','Imprimir alunos por turma e classe')
@section('content')
<style>
    .center{
  margin: 0 auto;
}
</style>
<div class="col-md-8 center">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Alunos por Turma e classe</h4>
        @include('extra.errorInputs.index')
        <form class="forms-sample" method="POST" action="{{ route('TakeAluno') }}">
            @csrf
            <div class="row g-3 mb-3">
                <div class="col-sm">
                    <select name="turma" id="" class="form-control multiplo" required>
                        <option value="Todos">Todos</option>
                        @foreach ($turma as $turma)
                        <option value="{{$turma->id}}">
                            {{ $turma->nome_turma }} | {{ $turma->nome_classe }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button target='_blank' type="submit" class="btn btn-primary mr-2">Imprimir</button>
        </form>
      </div>
    </div>

</div>
@include('layouts._includes.dashboard.Footer')
@endsection
