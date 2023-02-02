<div class="mb-3">
    <input type="text" name="nome_aluno"  value="{{ isset($alunos->nome_aluno) ? $alunos->nome_aluno : '' }}"
        class="form-control" id="setting-input-1" placeholder="Nome do Aluno" required>
</div>
<div class="row g-3 mb-3">


    <div class="col-sm">
        <input type="date" name="data_nasc" class="form-control" id="setting-input-1" placeholder="Data de Nascimento" required>
    </div>
    <div class="col-sm">
        <select name="sexo" value="{{ isset($alunos->sexo) ? $alunos->sexo : '' }}" class="form-control" id="">

            @isset($alunos)
            <option>{{ $alunos->sexo }}</option>
            @else
            <option disabled selected>Selecione o sexo</option>
            @endisset
          <option>Feminino</option>
          <option>Masculino</option>
        </select>
    </div>
</div>
<div class="mb-3">
    <select name="turma_id"  class="form-control" id="">

        @isset($alunos)
        <option value="{{ $alunos->turma_id }}" ></option>
        @else
        <option disabled selected>Selecione a turma</option>
        @endisset
        @isset($turmas)

        @foreach ($turmas as $turmas )
        <option value="{{ $turmas->id }}">{{ $turmas->nome_turma }} | {{ $turmas->nome_classe }} | {{ $turmas->centroexame }}</option>
        @endforeach

        @endisset
    </select>
</div>
<div class="row g-3 mb-3">
    <div class="col-sm">
        <input type="text" name="escola_prov" value="{{ isset($alunos->escola_proveniencia) ? $alunos->escola_proveniencia : '' }}" class="form-control" id="setting-input-1" placeholder="Escola de Proveniência" required>
    </div>
    <div class="col-sm">
        <select name="deficiencia" class="form-control" id="">

            @isset($alunos)
            <option>{{ $alunos->deficiencia }}</option>
            @else
            <option disabled selected>Selecione a Deficiencia</option>
            @endisset
           @include('extra.deficiencias.index')
        </select>
    </div>

</div>


