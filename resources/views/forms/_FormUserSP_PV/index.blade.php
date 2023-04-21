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
        <input type="number" name="telefone"  value="{{ isset($users->telefone) ? $users->telefone : '' }}" class="form-control" id="setting-input-1"
            placeholder="numero de telefone" required>
    </div>
</div>
<div class=" row mb-3">
    <div class="col-sm">
        <select name="tipo_user"  value="{{ isset($users->tipo_user) ? $users->tipo_user : '' }}" class="form-control multiplo" id="">

           @isset($users)
           <option value="{{ $users->tipo_user }}" >
            @if($users->tipo_user == "SP")
            Secretários
        @else
        Vigilante
        @endif
    </option>
           @else
           <option disabled selected>Selecione o Tipo de Usuário</option>
           @endisset
            <option value="SP" >Secretário</option>
            <option value="V">Vigilante</option>
        </select>
    </div>
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

