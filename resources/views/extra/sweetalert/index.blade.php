<script src="/src/plugins/sweetalert2/sweetalert2.all.js"></script>
<script src="/src/plugins/sweetalert2/sweet-alert.init.js"></script>
@if (session('mensagemAdd'))
    <script>
        swal('Bom trabalho!', 'Mensagem enviada com sucesso por email', 'success', {
            button: 'Ok'
        })
    </script>
@endif

@if (session('status_delete'))
    <script>
        swal('Bom trabalho!', 'Dados eliminados com sucesso', 'success', {
            button: 'Ok'
        })
    </script>
@endif
@if (session('smsAdd'))
    <script>
        swal('Bom trabalho!', 'Mensagem adicionada com sucesso', 'success', {
            button: 'Ok'
        })
    </script>
@endif
@if (session('smsUpdate'))
    <script>
        swal('Bom trabalho!', 'Mensagem actualizada com sucesso', 'success', {
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
@if (session('programAdd'))
    <script>
        swal('Bom trabalho!!', 'Programa adicionado com sucesso', 'success', {
            button: 'Ok'
        })
    </script>
@endif
@if (session('programUpdate'))
    <script>
        swal('Bom trabalho!!', 'Programa actualizado com sucesso', 'success', {
            button: 'Ok'
        })
    </script>
@endif
@if (session('serviceAdd'))
    <script>
        swal('Processo adicionado!', 'Consulte o seu email para obter a referência do seu processo', 'success', {
            button: 'Ok'
        })
    </script>
@endif
@if (session('serviceUpdate'))
    <script>
        swal('Bom trabalho!!', 'Processo actualizado com sucesso', 'success', {
            button: 'Ok'
        })
    </script>
@endif

@if (session('status_Error_Consulta'))
    <script>
        swal('Registo não encontrado!', 'Verifique a referência', 'error', {
            button: 'OK'
        })
    </script>
@endif
@if (session('UpdateStatus'))
    <script>
        swal('Bom trabalho!!', 'Estado actualizado com sucesso', 'success', {
            button: 'ok'
        })
    </script>
@endif
@if (session('userAdd'))
    <script>
        swal('Bom trabalho!!', 'Usuário adicionado com sucesso', 'success', {
            button: 'ok'
        })
    </script>
@endif
@if (session('userUpdate'))
    <script>
        swal('Bom trabalho!!', 'Usuário actualizado com sucesso', 'success', {
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
@if (session('RegisterUtente'))
    <script>
        swal('Bom trabalho!', 'Dados adicionados com sucesso', 'success', {
            button: 'ok'
        })
    </script>
@endif

@if(session('RegisterUtente1'))
<script>
      swal('Bom trabalho!', 'Dados adicionados com sucesso', 'success', {
        button: {
                text: "ok"
            }
        }).then((value) => {
            window.location = "/login"
        });
</script>

@endif
@if (session('RegisterUtenteError'))
    <script>
        swal('Upps!', 'Dados não Encontrados, Verifique a referência', 'error', {
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
