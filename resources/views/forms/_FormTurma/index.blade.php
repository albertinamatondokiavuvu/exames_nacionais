<div class="mb-3">
    <input type="text" name="nome_turma"  value="{{ isset($turmas->nome_turma) ? $turmas->nome_turma : '' }}"
        class="form-control" id="setting-input-1" placeholder="Nome da Turma" required>
</div>
<div class="row g-3 mb-3">
    <div class="col-sm">
        <input type="number" name="quantidade"
            value="{{ isset($turmas->quantidade) ? $turmas->quantidade : '' }}" class="form-control" id="setting-input-1"
            placeholder="quantidade de alunos nesta turma" required>
    </div>
    <div class="col-sm">
       <select name="classe_id" id="" class="form-control">
        @isset($turmas->classe_id)
        <option hidden style="color: green" selected value="{{ $turmas->classe_id }}"></option>
        @else
            <option selected disabled>Selecione a classe</option>
        @endisset
        @foreach ($classes as $classes )
        <option value="{{ $classes->id }}" >{{ $classes->nome_classe }}</option>
        @endforeach

       </select>
    </div>
</div>
