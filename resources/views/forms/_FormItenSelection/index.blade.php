<div class="mb-3">
    <input type="text" name="codigo_disciplina"  value="{{ isset($turmas->codigo_disciplina) ? $turmas->codigo_disciplina : '' }}"
        class="form-control" id="setting-input-1" placeholder="Código da Disciplina" required>
</div>
<div class="row g-3 mb-3">
    <div class="col-sm">
        <input type="text" name="codigo_folha"
            value="{{ isset($turmas->codigo_folha) ? $turmas->codigo_folha : '' }}" class="form-control" id="setting-input-1"
            placeholder="Código da Folha" required>
    </div>

</div>
