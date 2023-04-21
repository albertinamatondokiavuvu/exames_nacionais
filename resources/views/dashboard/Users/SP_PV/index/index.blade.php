@extends('layouts._includes.dashboard.Header')
@section('title','Listar Secretários e Vigilantes')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Listar Secretários e Vigilantes</h4>

        <div class="table-responsive">
          <table  class="table table-hover table_id">
            <thead class="">
                <th>Nº</th>
                <th class="text-center">Nome</th>
                <th class="text-center">Email</th>
                <th class="text-center">Telefone</th>
                <th class="text-center">Tipo de Usuário</th>
                <th>Acções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $users)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td class="text-center">{{ $users->name }}</td>
                    <td class="text-center">{{ $users->email }}</td>
                    <td class="text-center">{{ $users->telefone }}</td>
                    @if($users->tipo_user == "SP")
                    <td class="text-center">Secretários</td>
                    @else
                    <td class="text-center">Vigilante</td>
                    @endif

                    <td>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-clone" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item btn btn-danger "

                                href="{{ route('user_edit',$users->id) }}">Editar</a>
                                <form action="{{ route('delete',$users->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <a class="dropdown-item btn btn-danger remove-user"
                                        data-confirm="Tem certeza que deseja eliminar?"
                                        href="{{ route('delete',$users->id) }}">Eliminar</a>
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
