<div class="modal fade" id="edit-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title"><b>Alterar a Senha</b></h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('UpdatePassword',Auth::user()->id) }}">
                    @csrf
                    <div class="col-md-12">
                        <label class="form-label" for="password">Senha</label>

                        <input placeholder="xxxxxx-xxx" id="password" class="form-control"
                            value="{{ Auth::user()->password }}" type="password" name="password"
                            required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="col-md-12">
                        <label class="form-label" for="password_confirmation">Confirmar
                            senha</label>

                        <input placeholder="xxxxxx-xxx" id="password_confirmation"
                            class="col-12 form-control"
                            value="{{ Auth::user()->password_confirmation }}"
                            value="{{ old('password_confirmation') }}" type="password"
                            name="password_confirmation" required />
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left"
                            data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar a nova Senha</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
