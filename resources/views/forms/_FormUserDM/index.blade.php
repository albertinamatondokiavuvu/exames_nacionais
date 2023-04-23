<div class="mb-3">
    <input type="text" name="name" value="{{ isset($users->name) ? $users->name : '' }}"  value="{{ old('name') }}"
        class="form-control" id="setting-input-1" placeholder="Nome" required>
</div>
<div class="row g-3 mb-3">
    <div class="col-sm">
        <input type="email" name="email"
            value="{{ isset($users->email) ? $users->email : '' }}"  value="{{ old('email') }}" class="form-control" id="setting-input-1"
            placeholder="Email" required>
    </div>
    <div class="col-sm">
        <input type="number"  value="{{ isset($users->telefone) ? $users->telefone : '' }}" name="telefone" class="form-control" id="setting-input-1"
            placeholder="numero de telefone" required>
    </div>
</div>
<div class="mb-3">
    <select name="municipio" class="form-control multiplo" id="">
        @isset($users)
        <option>{{ $users->municipio }}</option>
        @else
        <option disabled selected>Selecione o Município</option>
        @endisset

@if(Auth::user()->provincia == "Bengo")
@include('extra.municipio.Bengo.index')
@elseif(Auth::user()->provincia == "Benguela")
@include('extra.municipio.Benguela.index')
@elseif(Auth::user()->provincia == "bié")
@include('extra.municipio.Bie.index')
@elseif(Auth::user()->provincia == "Cabinda")
@include('extra.municipio.Cabinda.index')
@elseif(Auth::user()->provincia == "Cuando-Cubango")
@include('extra.municipio.Cuando_Cubango.index')
@elseif(Auth::user()->provincia == "Cuanza Norte")
@include('extra.municipio.Cuanza_norte.index')
@elseif(Auth::user()->provincia == "Cuanza Sul")
@include('extra.municipio.cuanza_sul.index')
@elseif(Auth::user()->provincia == "Cunene")
@include('extra.municipio.Cunene.index')
@elseif(Auth::user()->provincia == "Huambo")
@include('extra.municipio.Huambo.index')
@elseif(Auth::user()->provincia == "Huíla")
@include('extra.municipio.Huila.index')
@elseif(Auth::user()->provincia == "Luanda")
@include('extra.municipio.Luanda.index')
@elseif(Auth::user()->provincia == "Lunda Norte")
@include('extra.municipio.Lunda_norte.index')
@elseif(Auth::user()->provincia == "Lunda Sul")
@include('extra.municipio.Lunda_sul.index')
@elseif(Auth::user()->provincia == "malanje")
@include('extra.municipio.Malanje.index')
@elseif(Auth::user()->provincia == "Moxico")
@include('extra.municipio.Moxico.index')
@elseif(Auth::user()->provincia == "Namibe")
@include('extra.municipio.Namibe.index')
@elseif(Auth::user()->provincia == "Uíge")
@include('extra.municipio.Uige.index')
@elseif(Auth::user()->provincia == "Zaire")
@include('extra.municipio.Zaire.index')
@endif
    </select>
</div>
@isset($users)
@else
    <div class="row g-3 mb-3">

        <div class="col-sm">
            <input type="password" name="password" class="form-control" id="setting-input-1" placeholder="palavra-passe"
                required>
        </div>
        <div class="col-sm">
            <input type="password" name="password_confirmation" class="form-control" id="setting-input-1"
                placeholder="confirmar a palavra passe" required>
        </div>

    </div>
@endisset

