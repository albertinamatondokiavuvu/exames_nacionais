<div class="mb-3">
    <input type="text" name="name"  value="{{ isset($users->name) ? $users->name : '' }}"
        class="form-control" id="setting-input-1" placeholder="Nome do Aluno" required>
</div>
<div class="row g-3 mb-3">
    <div class="col-sm">
        <input type="text" name="escola_prov" class="form-control" id="setting-input-1" placeholder="Escola de Proveniência" required>
    </div>
    <div class="col-sm">
        <input type="text" name="data_nasc" class="form-control" id="setting-input-1" placeholder="Data de Nascimento" required>
    </div>
</div>
<div class="row g-3 mb-3">
    <div class="col-sm">
        <select name="deficiencia" value="{{ isset($alunos->deficiencia) ? $alunos->deficiencia : '' }}" class="form-control" id="">

            @isset($alunos)
            <option>{{ $alunos->deficiencia }}</option>
            @else
            <option disabled selected>Selecione a Deficiencia</option>
            @endisset
           @include('extra.deficiencias.index')
        </select>
    </div>
    <div class="col-sm">
        <select name="sexo" value="{{ isset($alunos->sexo) ? $alunos->sexo : '' }}" class="form-control" id="">

            @isset($alunos)
            <option>{{ $alunos->sexo }}</option>
            @else
            <option disabled selected>Selecione o sexo</option>
            @endisset
           @include('extra.sexo.index')
        </select>
    </div>
</div>