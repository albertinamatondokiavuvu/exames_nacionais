@extends('layouts._includes.dashboard.Header')
@section('title','Centros de exames - Dashboard')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Centros de exames</h4>

        <div class="table-responsive">
          <table id="table_id" class="table table-hover">
            <thead class="">
                <th>Nº</th>
                <th class="text-center">centro de exame</th>
                <th>Acções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($centros as $centros)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td class="text-center">{{ $centros->nome_centro}}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-clone" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <form action="{{ route('delete_centro',$centros->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <a class="dropdown-item btn btn-danger remove-user"
                                        data-confirm="Tem certeza que deseja eliminar?"
                                        href="{{ route('delete_centro',$centros->id) }}">Eliminar</a>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@include('layouts._includes.dashboard.Footer')
@endsection
