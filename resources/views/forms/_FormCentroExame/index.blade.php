<div class="mb-3">
    <select name="nome_centro" class="form-control" id="">
        @isset($centros)
        <option>{{ $centros->nome_centro }}</option>
        @else
        <option disabled selected>Selecione o centro</option>
        @endisset

@if(Auth::user()->provincia == "Bengo")
<option>Dande</option>
<option>Ambriz</option>
<option>Pango Aluquém</option>
<option>Dembos</option>
<option>Nambuangongo</option>
<option>Bula Atumba</option>

    @if(Auth::user()->municipio == "Dande")
    @include('extra.centro.Bengo.Dande.index')
    @elseif (Auth::user()->municipio == "Bula Atumba")
    @include('extra.centro.Bengo.Bula_atumba.index')
    @elseif (Auth::user()->municipio == "Ambriz")
    @include('extra.centro.Bengo.Ambriz.index')
    @elseif (Auth::user()->municipio == "Pango Aluqém")
    @include('extra.centro.Bengo.pango_aluquem.index')
    @elseif (Auth::user()->municipio == "Dembos")
    @include('extra.centro.Bengo.Dembos.index')
    @elseif (Auth::user()->municipio == "Nambuangongo")
    @include('extra.centro.Bengo.nambuangongo.index')
    @endif
@elseif(Auth::user()->provincia == "Benguela")



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

@if(Auth::user()->provincia == "Huila")
<option>Caconda</option>
<option>Cacula</option>
<option>Caluquembe</option>
<option>Chibia</option>
<option>Chicomba</option>
<option>Chipindo</option>
<option>Cuvango</option>
<option>Gambos</option>
<option>Humpata</option>
<option>Jamba</option>
<option>Lombonjo</option>
<option>Lubango</option>
<option>Matala</option>
<option>Quilembes</option>
<option>Quipungo</option>

    @if(Auth::user()->municipio == "Caconda")
    @include('extra.centro.Huila.Caconda.index')
    @elseif (Auth::user()->municipio == "Cacula")
    @include('extra.centro.Huila.Cacula.index')
    @elseif (Auth::user()->municipio == "Caluquembe")
    @include('extra.centro.Huila.Caluquembe.index')
    @elseif (Auth::user()->municipio == "Chibia")
    @include('extra.centro.Huila.Chibia.index')
    @elseif (Auth::user()->municipio == "Chicomba")
    @include('extra.centro.Huila.Chicomba.index')
    @elseif (Auth::user()->municipio == "Chipindo")
    @include('extra.centro.Huila.Chipindo.index')
    @elseif (Auth::user()->municipio == "Cuvango")
    @include('extra.centro.Huila.Cuvango.index')
    @elseif (Auth::user()->municipio == "Humpata")
    @include('extra.centro.Huila.Humpata.index')
    @elseif (Auth::user()->municipio == "Jamba")
    @include('extra.centro.Huila.Jamba.index')
    @elseif (Auth::user()->municipio == "Lombonjo")
    @include('extra.centro.Huila.Lombonjo.index')
    @elseif (Auth::user()->municipio == "Lubango")
    @include('extra.centro.Huila.Lubango.index')
    @elseif (Auth::user()->municipio == "Matala")
    @include('extra.centro.Huila.Matala.index')
    @elseif (Auth::user()->municipio == "Quilembes")
    @include('extra.centro.Huila.Quilembes.index')
    @elseif (Auth::user()->municipio == "Quipungo")
    @include('extra.centro.Huila.Quipungo.index')
    @endif

@elseif(Auth::user()->provincia == "Luanda")
<option>BELAS</option>
<option>CACUACO</option>
<option>CAZENGA</option>
<option>ESTRUTURA CENTRAL</option>
<option>ICOLO E BENGO</option>
<option>KILAMBA KIAXI</option>
<option>LUANDA</option>
<option>QUIÇAMA</option>
<option>RANGEL</option>
<option>TALATONA</option>
<option>VIANA</option>

    @if(Auth::user()->municipio == "BELAS")
    @include('extra.centro.Luanda.Belas.index')
    @elseif (Auth::user()->municipio == "CACUACO")
    @include('extra.centro.Luanda.Cacuaco.index')
    @elseif (Auth::user()->municipio == "CAZENGA")
    @include('extra.centro.Luanda.Cazenga.index')
    @elseif (Auth::user()->municipio == "ESTRUTURA CENTRAL")
    @include('extra.centro.Luanda.Estrutura_central.index')
    @elseif (Auth::user()->municipio == "ICOLO E BENGO")
    @include('extra.centro.Luanda.Icolo_e_bengo.index')
    @elseif (Auth::user()->municipio == "KILAMBA KIAXI")
    @include('extra.centro.Luanda.Kilamba_kiaxi.index')
    @elseif (Auth::user()->municipio == "LUANDA")
    @include('extra.centro.Luanda.Luanda.index')
    @elseif (Auth::user()->municipio == "QUIÇAMA")
    @include('extra.centro.Luanda.Quicama.index')
    @elseif (Auth::user()->municipio == "RANGEL")
    @include('extra.centro.Luanda.Rangel.index')
    @elseif (Auth::user()->municipio == "TALATONA")
    @include('extra.centro.Luanda.Talatona.index')
    @elseif (Auth::user()->municipio == "VIANA")
    @include('extra.centro.Luanda.Viana.index')
    @endif

    @elseif(Auth::user()->provincia == "Lunda-Norte")
    <option>Cambulo</option>
    <option>Capenda-Camulemba</option>
    <option>Caungula</option>
    <option>Chitato</option>
    <option>Cuango</option>
    <option>Cuilo</option>
    <option>Lóvua</option>
    <option>Lubalo</option>
    <option>Lucapa</option>

    
        @if(Auth::user()->municipio == "Cambulo")
        @include('extra.centro.Luanda_norte.Cambulo.index')
        @elseif (Auth::user()->municipio == "Capenda-Camulemba")
        @include('extra.centro.Luanda_norte.Capenda_camulemba.index')
        @elseif (Auth::user()->municipio == "Caungula")
        @include('extra.centro.Luanda_norte.Caungula.index')
        @elseif (Auth::user()->municipio == "Chitato")
        @include('extra.centro.Luanda_norte.Chitato.index')
        @elseif (Auth::user()->municipio == "Cuango")
        @include('extra.centro.Luanda_norte.Cuango.index')
        @elseif (Auth::user()->municipio == "Cuilo")
        @include('extra.centro.Luanda_norte.Cuilo.index')
        @elseif (Auth::user()->municipio == "Lóvua")
        @include('extra.centro.Luanda_norte.Lovua.index')
        @elseif (Auth::user()->municipio == "Lubalo")
        @include('extra.centro.Luanda_norte.Lubalo.index')
        @elseif (Auth::user()->municipio == "Lucapa")
        @include('extra.centro.Luanda_norte.Lucapa.index')
        @endif

        @elseif(Auth::user()->provincia == "Lunda-Norte")
        <option>Cacolo</option>
        <option>Dala</option>
        <option>Muconda</option>
        <option>Saurimo</option>
    
        
            @if(Auth::user()->municipio == "Cacolo")
            @include('extra.centro.Luanda_sul.Cacolo.index')
            @elseif (Auth::user()->municipio == "Dala")
            @include('extra.centro.Luanda_sul.Dala.index')
            @elseif (Auth::user()->municipio == "Muconda")
            @include('extra.centro.Luanda_sul.Muconda.index')
            @elseif (Auth::user()->municipio == "Saurimo")
            @include('extra.centro.Luanda_sul.Saurimo.index')
            @endif

        
@elseif(Auth::user()->provincia == "Malanje")
@include('extra.centro.Luanda_norte.Cambulo.index')
@elseif (Auth::user()->municipio == "Capenda-Camulemba")
@include('extra.centro.Luanda_norte.Capenda_camulemba.index')
@elseif (Auth::user()->municipio == "Caungula")
@include('extra.centro.Luanda_norte.Caungula.index')
@elseif (Auth::user()->municipio == "Chitato")
@include('extra.centro.Luanda_norte.Chitato.index')
@elseif (Auth::user()->municipio == "Cuango")
@include('extra.centro.Luanda_norte.Cuango.index')
@elseif (Auth::user()->municipio == "Cuilo")
@include('extra.centro.Luanda_norte.Cuilo.index')
@elseif (Auth::user()->municipio == "Lóvua")
@include('extra.centro.Luanda_norte.Lovua.index')
@elseif (Auth::user()->municipio == "Lubalo")
@include('extra.centro.Luanda_norte.Lubalo.index')
@elseif (Auth::user()->municipio == "Lucapa")
@include('extra.centro.Luanda_norte.Lucapa.index')
@endif

@elseif(Auth::user()->provincia == "Lunda-Norte")
<option>Cacuso</option>
<option>Cahombo</option>
<option>Calandula</option>
<option>Cambundi-Catembo</option>
<option>Cangandala</option>
<option>Kiwaba-Nzoji</option>
<option>Luquembo</option>
<option>Malanje</option>
<option>Marimba</option>
<option>Massango</option>
<option>Moxico</option>
<option>Mucari</option>
<option>Quela</option>


    @if(Auth::user()->municipio == "Cacuso")
    @include('extra.centro.Malanje.Cacuso.index')
    @elseif (Auth::user()->municipio == "Cahombo")
    @include('extra.centro.Malanje.Cahombo.index')
    @elseif (Auth::user()->municipio == "Calandula")
    @include('extra.centro.Malanje.Calandula.index')
    @elseif (Auth::user()->municipio == "Cambundi-Catembo")
    @include('extra.centro.Malanje.Cambundi_catembo.index')
    @elseif (Auth::user()->municipio == "Cangandala")
    @include('extra.centro.Malanje.Cangandala.index')
    @elseif (Auth::user()->municipio == "Kiwaba-Nzoji")
    @include('extra.centro.Malanje.Kiwaba_nzoji.index')
    @elseif (Auth::user()->municipio == "Luquembo")
    @include('extra.centro.Malanje.Luquembo.index')
    @elseif (Auth::user()->municipio == "Malanje")
    @include('extra.centro.Malanje.Malanje.index')
    @elseif (Auth::user()->municipio == "Marimba")
    @include('extra.centro.Malanje.Marimba.index')
    @elseif (Auth::user()->municipio == "Massango")
    @include('extra.centro.Malanje.Massango.index')
    @elseif (Auth::user()->municipio == "Moxico")
    @include('extra.centro.Malanje.Moxico.index')
    @elseif (Auth::user()->municipio == "Mucari")
    @include('extra.centro.Malanje.Mucari.index')
    @elseif (Auth::user()->municipio == "Quela")
    @include('extra.centro.Malanje.Quela.index')
    @endif


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
