<script src="/src/plugins/sweetalert2/sweetalert2.all.js"></script>
<script src="/src/plugins/sweetalert2/sweet-alert.init.js"></script>
@if (session('status_delete'))
    <script>
        swal('Bom trabalho!', 'Dados eliminados com sucesso', 'success', {
            button: 'Ok'
        })
    </script>
@endif

@if (session('status_error'))
    <script>
        swal('Upps!', 'Verificar os dados a inserir', 'error', {
            button: 'Ok'
        })
    </script>
@endif
@if (session('UpdatePassword'))
    <script>
        swal('Bom trabalho!!', 'Senha alterado', 'success', {
            button: 'Ok'
        })
    </script>
@endif


@if (session('status_add'))
    <script>
        swal('Bom trabalho!!', 'Dados adicionado com sucesso', 'success', {
            button: 'ok'
        })
    </script>
@endif
@if (session('status_update'))
    <script>
        swal('Bom trabalho!!', 'Dados actualizado com sucesso', 'success', {
            button: 'ok'
        })
    </script>
@endif
@if (session('UpdateProfile'))
    <script>
        swal('Bom trabalho!!', 'Perfil actualizado com sucesso', 'success', {
            button: 'ok'
        })
    </script>
@endif

@if (session('status'))
    <script>
        swal('Link Enviado!', 'Enviamos um link de redefinição de senha no seu email', 'success', {
            button: 'ok'
        })
    </script>
@endif
