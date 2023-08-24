
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Giga Games</title>
        <link rel="stylesheet" href="../assets/administrator/css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    </head>

    <header>
        <?php
            include_once '../topmenu.php';
        ?>
    </header>

    <!-- ===== JS MODAL ESQUECEU SENHA ===== -->
    <script src="../assets/modalLogin/js/placeholders.min.js"></script>
    <script src="../assets/modalLogin/js/main.js"></script>
    <div class="cd-signin-modal__block js-signin-modal-block" data-type="reset">
        <p class="cd-signin-modal__message">Esqueceu sua senha? <br> Por favor, informe o seu endereço de e-mail. Você receberá um link para redefinir uma nova senha.</p>

        <div class="cd-signin-modal__form">
            <p class="cd-signin-modal__fieldset">
                <label class="cd-signin-modal__label cd-signin-modal__label--email cd-signin-modal__label--image-replace" for="reset-email">E-mail</label>
                <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding cd-signin-modal__input--has-border" id="reset-email" type="email" placeholder="E-mail">
                <span class="cd-signin-modal__error">Preencha este campo</span>
            </p>

            <p class="cd-signin-modal__fieldset">
                <input class="cd-signin-modal__input cd-signin-modal__input--full-width cd-signin-modal__input--has-padding" type="submit" value="Resetar Senha">
            </p>
        </div>

        <p class="cd-signin-modal__bottom-message js-signin-modal-trigger"><a href="#0" data-signin="login">Voltar</a></p>
    </div>

    <body>
        <div class="container">
            <div class="content first-content">
                <div class="first-column">
                    <h2 class="title title-primary">Seja Bem Vindo!</h2>
                    <p class="description description-primary">A GigaGames está contente com sua presença<br>aqui! :)</p>
                    <br>
                    <p class="description description-primary">Já possui um cadastro? <a href="#0" id="signin" style="color: #fff">Faça o Login</a></p>
                </div>    
                <div class="second-column">
                    <h2 class="title title-second">Criar Conta</h2>
                    <p class="description description-second">Digite as informações abaixo para se registrar:</p>
                    <form id="formCadastro" name="formCadastro" class="form" method="POST" action="" enctype="multipart/form-data">
                        <div class="row" style="width: 95%;">
                            <div class="col-md-6">
                                <label class="label-input" for="">
                                    <i class="far fa-user icon-modify"></i>
                                    <input type="text" id="txtNomeCad" name="txtNomeCad" placeholder="Nome">
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="label-input" for="">
                                    <i class="far fa-user icon-modify"></i>
                                    <input type="text" id="txtSobrenomeCad" name="txtSobrenomeCad" placeholder="Sobrenome">
                                </label>
                            </div>
                        </div>

                        <div class="row" style="width: 95%;">
                            <div class="col-md-6">
                                <label class="label-input" for="">
                                    <i class="far fa-envelope icon-modify"></i>
                                    <input type="email" id="txtEmailCad" name="txtEmailCad" placeholder="E-mail">
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="label-input" for="">
                                    <i class="fa-solid fa-phone icon-modify"></i>
                                    <input type="text" id="txtTelefoneCad" name="txtTelefoneCad" placeholder="Telefone">
                                </label>
                            </div>
                        </div>

                        <div class="row" style="width: 95%;">
                            <div class="col-md-6">
                                <label class="label-input" for="">
                                    <i class="fas fa-lock icon-modify"></i>
                                    <input type="password" id="txtSenhaCad" name="txtSenhaCad" placeholder="Senha">
                                    <i class="bi bi-eye icon-modify hide-password" style="cursor: pointer;"></i>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="label-input" for="">
                                    <i class="fas fa-lock icon-modify"></i>
                                    <input type="password" id="txtConfirmaSenhaCad" name="txtConfirmaSenhaCad" placeholder="Confirme sua senha" onchange="checkPass()">
                                    <i class="bi bi-eye icon-modify hide-password" style="cursor: pointer;"></i>
                                </label>  
                            </div>
                        </div>
                        <button type="button" class="btnGiga" id="btnCadastra" name="btnCadastra" onclick="RegistraUser()">Cadastrar</button>        
                    </form>
                </div>
            </div>
            <div class="content second-content">
                <div class="first-column">
                    <h2 class="title title-primary">Olá, Amigo!</h2>
                    <p class="description description-primary">Faça login com sua conta para<br>desfrutar da melhor plataforma de games<br>online do mundo!</p>
                    <br>
                    <p class="description description-primary">Ainda não possui uma conta? <a href="#0" id="signup">Cadastre-se</a></p>
                    <!-- <button id="signup" class="btn btn-primary">sign up</button> -->
                </div>
                <div class="second-column">
                    <h2 class="title title-second">Login</h2>
                    <p class="description description-second">Use seu e-mail para realizar o acesso:</p>
                    <br>
                    
                    <form id="formLogin" name="formLogin" class="form2" method="POST" enctype="multipart/form-data">
                        <label class="label-input" for="">
                            <i class="far fa-envelope icon-modify"></i>
                            <input type="email" id="txtEmail" name="txtEmail" placeholder="E-mail">
                        </label>
                        <label class="label-input" for="">
                            <i class="fas fa-lock icon-modify"></i>
                            <input type="password" id="txtSenha" name="txtSenha" placeholder="Senha">
                            <i class="bi bi-eye icon-modify hide-password" style="cursor: pointer;"></i>
                        </label>
                    
                        <a class="password" data-signin="reset" href="#0">Esqueceu a senha?</a>
                        <button type="button" class="btnGiga" id="btnLogin" name="btnLogin" onclick="loginGiga()">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    <footer>
        <?php
            include_once '../footer.php';
        ?>
    </footer>
</html>

<script src="../assets/administrator/js/scripts.js"></script>

<script>
    //hide or show password
    $('.hide-password').on('click', function(){
        var $this= $(this),
        $password_field = $this.prev('input');
        
        ( 'password' == $password_field.attr('type') ) ? $password_field.attr('type', 'text') : $password_field.attr('type', 'password');
        ( 'bi bi-eye-slash icon-modify' == $this.attr('class') ) ? $this.attr('class', 'bi bi-eye icon-modify') : $this.attr('class', 'bi bi-eye-slash icon-modify');
        //focus and move cursor to the end of input field
        $password_field.putCursorAtEnd();
    });
</script>

<script>
    function loginGiga(){
        var msg = '';
        if(document.getElementById('txtEmail').value == ''){
            msg = msg + '- E-mail' + '<br>';
        }
        if(document.getElementById('txtSenha').value == ''){
            msg = msg + '- Senha';
        }
        if(msg != ''){
            Swal.fire({
                icon: 'error',
                title: 'Para prosseguir, preencha os campos:',
                html: msg
            })
        }
        else{
            let formdata = new FormData($("form[name='formLogin']")[0])
            $.ajax({
                url:"enter.php",
                data: formdata,
                type: "POST",
                dataType: "json",
                contentType: false,
                processData: false,
                success:function(retorno){
                    if(retorno.id_user == null){
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            heightAuto: true,
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'error',
                            title: 'Erro: Usúario ou senha inválidos!'
                        })
                    }
                    else{
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            },
                            willClose: (toast) => {
                                setTimeout(function(){
                                    if(retorno.tipo_perfil == 'Cliente'){
                                        window.location.assign("../home/");
                                    }
                                    else if(retorno.tipo_perfil == 'Administrador'){
                                        window.location.assign("../administrator/");
                                    }
                                },200); 
                                
                            }
                        })
                        Toast.fire({
                            icon: 'success',
                            title: 'Login Realizado com Sucesso!'
                        })
                    }
                },
                error: function(retorno){
                    if(retorno.id_user == null){
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            customClass: {container: 'swal2-containerE', popup:'swal2-popupE'},
                            timer: 1500,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'error',
                            title: 'ERRO: Usúario ou senha inválidos!'
                        })
                    }
                }
            });
        }
    }
</script>


<script>
    function RegistraUser(){
        var mensagem = '';
        if(document.getElementById('txtNomeCad').value == ''){
            mensagem = mensagem + '- Nome' + '<br>';
        }
        if(document.getElementById('txtSobrenomeCad').value == ''){
            mensagem = mensagem + '- Sobrenome' + '<br>';
        }
        if(document.getElementById('txtEmailCad').value == ''){
            mensagem = mensagem + '- E-mail' + '<br>';
        }
        if(document.getElementById('txtTelefoneCad').value == ''){
            mensagem = mensagem + '- Telefone' + '<br>';
        }
        if(document.getElementById('txtSenhaCad').value == ''){
            mensagem = mensagem + '- Senha' + '<br>';
        }
        if(document.getElementById('txtConfirmaSenhaCad').value == ''){
            mensagem = mensagem + '- Confirmação de Senha';
        }
        if(mensagem != ''){
            Swal.fire({
                icon: 'error',
                title: 'Para prosseguir, preencha os campos:',
                html: mensagem
            })
        }
        else{
            let formdata2 = new FormData($("form[name='formCadastro']")[0])
            $.ajax({
                url:"cadastraUser.php",
                data: formdata2,
                type: "POST",
                dataType: "json",
                contentType: false,
                processData: false,
                success:function(retorno){
                    if(retorno.status == '0'){
                        let timerInterval
                        Swal.fire({
                            icon: 'success',
                            title: 'Perfil cadastrado com sucesso!',
                            showConfirmButton: false,
                            timer: 2000,
                            timerProgressBar: true,
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                        }).then((result) => {
                            if(result.dismiss === Swal.DismissReason.timer) {
                                Swal.fire({
                                    text: 'As credenciais serão enviadas ao E-mail cadastrado.',
                                    showConfirmButton: true
                                }).then((result) => {
                                    if(result.isConfirmed) {
                                        window.location.href='http://www.gigagames.mytcc.com.br/login';
                                    }
                                });
                            }
                        });
                        $.ajax({
                            url:"testmail.php?id_user=" + retorno.rs_user,
                            data: formdata2,
                            type: "POST",
                            contentType: false,
                            processData: false,
                            success: function(retorno){
                            },
                            error: function(retorno){
                            }
                        });
                    }
                    else if(retorno.status == '1'){
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            customClass: {container: 'swal2-containerE', popup:'swal2-popupE'},
                            timer: 1500,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'error',
                            title: 'Erro ao cadastrar perfil!'
                        })
                    }
                    else if(retorno.status == '2'){
                        Swal.fire({
                            title: 'Ops...',
                            text: 'Este E-mail já está cadastrado.',
                            icon: 'error',
                            showConfirmButton: true
                        }).then((result) => {
                        });
                    }
                },
                error: function(retorno){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        customClass: {container: 'swal2-containerE', popup:'swal2-popupE'},
                        timer: 1500,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'error',
                        title: 'ERRO ao cadastrar perfil!'
                    })
                }
            });
        }
    }
</script>

<script>
    function checkPass(){
        var pass = document.getElementById('txtSenhaCad').value;
        var passChecked = document.getElementById('txtConfirmaSenhaCad').value;

        if(pass != passChecked){
            Swal.fire({
                icon: 'error',
                title: 'Ops...',
                html: 'As senhas não coincidem!'
            }) 
        }
    }
</script>