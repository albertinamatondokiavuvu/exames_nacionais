<div class="mb-3">
    <select name="nome_centro" class="form-control" id="">
        @isset($centros)
        <option>{{ $centros->nome_centro }}</option>
        @else
        <option disabled selected>Selecione o o centro</option>
        @endisset

@if(Auth::user()->provincia == "Bengo")
@include('extra.centro.Bengo.index')
@elseif(Auth::user()->provincia == "Benguela")
@include('extra.centro.Benguela.index')
@elseif(Auth::user()->provincia == "Bie")
@include('extra.centro.Bie.index')
@elseif(Auth::user()->provincia == "Cabinda")
@include('extra.centro.Cabinda.index')
@elseif(Auth::user()->provincia == "Cuando Cubango")
@include('extra.centro.Cuando_Cubango.index')
@elseif(Auth::user()->provincia == "Cuanza Norte")
@include('extra.centro.Cuanza_norte.index')
@elseif(Auth::user()->provincia == "Cuanza Sul")
@include('extra.centro.cuanza_sul.index')
@elseif(Auth::user()->provincia == "Cunene")
@include('extra.centro.Cunene.index')
@elseif(Auth::user()->provincia == "Huambo")
@include('extra.centro.Huambo.index')
@elseif(Auth::user()->provincia == "Huíla")
@include('extra.centro.Huila.index')
@elseif(Auth::user()->provincia == "Luanda")
@include('extra.centro.Luanda.index')
@elseif(Auth::user()->provincia == "Lunda Norte")
@include('extra.centro.Lunda_norte.index')
@elseif(Auth::user()->provincia == "Lunda Sul")
@include('extra.centro.Lunda_sul.index')
@elseif(Auth::user()->provincia == "Malanje")
@include('extra.centro.Malanje.index')
@elseif(Auth::user()->provincia == "Moxico")
@include('extra.centro.Moxico.index')
@elseif(Auth::user()->provincia == "Namibe")
@include('extra.centro.Namibe.index')
@elseif(Auth::user()->provincia == "Uíge")
@include('extra.centro.Uige.index')
@elseif(Auth::user()->provincia == "Zaire")
@include('extra.centro.Zaire.index')
@endif
    </select>
</div>
