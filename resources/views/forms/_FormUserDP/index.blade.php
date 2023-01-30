<div class="mb-3">
    <input type="text" name="name"  value="{{ isset($users->name) ? $users->name : '' }}"
        class="form-control" id="setting-input-1" placeholder="Nome" required>
</div>
<div class="row g-3 mb-3">
    <div class="col-sm">
        <input type="email" name="email"
            value="{{ isset($users->email) ? $users->email : '' }}" class="form-control" id="setting-input-1"
            placeholder="Email" required>
    </div>
    <div class="col-sm">
        <input type="number" name="telefone" value="{{ isset($users->telefone) ? $users->telefone : '' }}" class="form-control" id="setting-input-1"
            placeholder="numero de telefone" required>
    </div>
</div>
<div class="mb-3">
    <select name="provincia" value="{{ isset($users->provincia) ? $users->provincia : '' }}" class="form-control" id="">

        @isset($users)
        <option>{{ $users->provincia }}</option>
        @else
        <option disabled selected>Selecione a Província</option>
        @endisset
       @include('extra.provincias.index')
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
