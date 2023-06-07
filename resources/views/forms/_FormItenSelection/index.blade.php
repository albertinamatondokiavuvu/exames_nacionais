<div class="mb-3">
    <select name="tipo" value="{{ isset($turmas->tipo) ? $turmas->tipo : '' }}" class="form-control multiplo" id="">

        @isset($turmas)
        <option>{{ $turmas->tipo }}</option>
        @else
        <option disabled selected>Selecione o tipo de item</option>
        @endisset
      <option>Selecção</option>
      <option>Construção</option>
    </select>
</div>
<div class="mb-3">
    <input type="text" name="codigo_disciplina"  value="{{ isset($turmas->codigo_disciplina) ? $turmas->codigo_disciplina : '' }}"
        class="form-control" id="setting-input-1" placeholder="Código1" required>
</div>
<div class="row g-3 mb-3">
    <div class="col-sm">
        <input type="text" name="codigo_folha"
            value="{{ isset($turmas->codigo_folha) ? $turmas->codigo_folha : '' }}" class="form-control" id="setting-input-1"
            placeholder="Código2" required>
    </div>

</div>
