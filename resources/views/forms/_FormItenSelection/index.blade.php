<div class="mb-3">
    <select name="tipo" value="{{ isset($selections->tipo) ? $selections->tipo : '' }}" class="form-control multiplo" id="">

        @isset($selections)
        <option>{{ $selections->tipo }}</option>
        @else
        <option disabled selected>Selecione o tipo de item</option>
        @endisset
      <option>Selecção</option>
      <option>Construção</option>
    </select>
</div>
<div class="mb-3">
    <input type="text" name="codigo_disciplina"  value="{{ isset($selections->codigo_disciplina) ? $selections->codigo_disciplina : '' }}"
        class="form-control" id="setting-input-1" placeholder="Código1" required>
</div>
<div class="row g-3 mb-3">
    <div class="col-sm">
        <input type="text" name="codigo_folha"
            value="{{ isset($selections->codigo_folha) ? $selections->codigo_folha : '' }}" class="form-control" id="setting-input-1"
            placeholder="Código2" required>
    </div>

</div>
