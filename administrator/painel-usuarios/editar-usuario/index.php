<?php
    include_once('../../../conexao.php');
?>

<?php
    # Executa a query de busca do usuário
    $buscaUsersCad = "select * from users where id_user = " .$_GET['id_user'];
    $result_buscaUsersCad = mysqli_query($conexao, $buscaUsersCad);
    $row = mysqli_fetch_array($result_buscaUsersCad);
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- ==========[FAVICON]========== -->
        <link rel="shortcut icon" href="../../../images/logo/favicon.ico" type="image/x-icon">
        <link rel="icon" href="../../../images/logo/favicon.ico" type="image/x-icon">
    </head>

    <header>
        <?php
            include_once '../../../topmenuAdm.php';
        ?>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap');

            body
            {
                font-family: 'Montserrat', sans-serif;
            }

            h2
            {
                font-family: 'Montserrat', sans-serif;
                padding-bottom: 20px;
            }

            h4
            {
                font-family: 'Montserrat', sans-serif;
                padding-top: 20px;
                padding-bottom: 10px;
            }
            .hoverAzul:hover{
                color: blue!important;
                transition: all .3s ease;
                transform: scale(1.23);
            }
            .hoverVermelho:hover{
                color: red!important;
                transition: all .3s ease;
                transform: scale(1.3);
            }
            .panel-heading1{
                background: #5A9BE6;
                color: #fff;
                padding:20px;
                margin-bottom: 30px;
                margin-top: -15px!important;
                width: 100%;
            }
            .panel-heading{
                background: #5A9BE6;
                padding:20px;
                border-radius: 8px 8px 0px 0px;
            }
            .disable{
                display:none;
            }
            .enable{
                display:block;
            }
            .olhoaberto{
                <i class="bi bi-eye-fill"></i>
            }
            .olhofechado{
                <i class="bi bi-eye-slash-fill"></i>
            }
            .labelFiltros{
                font-size: 20px;
                margin-top: 2%;
            }
            #olho{
                font-size: 27px;
                cursor: pointer;
                color: #fff;
            }
            #olho:hover{
                color: #cfcfcf!important;
                transition: all .4s ease;
            }
            #olho2{
                font-size: 27px;
                cursor: pointer;
                color: #fff;
            }
            #olho2:hover{
                color: #cfcfcf!important;
                transition: all .4s ease;
            }
            .alinha-botao-direita {
                text-align-last: right;
            }
            .formInpt {
                display: block;
                width: 100%;
                height: 34px;
                outline: none;
                padding: 6px 10px;
                font-size: 14px;
                background-color: #fff;
                background-image: none;
                border: none;
                border-bottom: 1px solid #5A9BE6;
            }
            .btnAtualiza {
                background-color: #5A9BE6;
                color: #FFF;
                border: none;
                border-radius: 0.25rem;
                padding: 0.5rem;
            }
            .btnAtualiza:hover {
                background-color: #fff;
                color: #5A9BE6;
                border: 1px solid #5A9BE6;
                border-radius: 0.25rem;
                padding: 0.5rem;
            }
        </style>
    </header>
    
    <body>
        <div class="panel-heading1">
            <h3>
                <center><label>Editar Usuário</label></center>
            </h3> 
        </div>
        <form id="formAtualiza" name="formAtualiza" class="form" method="POST" action="" enctype="multipart/form-data">
            <main class="container">
                <div class="content">
                    <div class="panel-body" style="padding: 3rem; background-color: #fff; border: 1px solid #cfcfcf; border-radius: 8px 8px; width: 100%!important; box-shadow: 0px 10px 30px -3px rgba(0,0,0,0.1);">
                        <div class="row">
                            <div class="col-md-4">
                                <label>E-mail</label>
                                <input type="text" class="formInpt" name="txtEmail" id="txtEmail" value="<?php echo $row['e_mail'] ?>">
                            </div>
                            <div class="col-md-4">
                                <label>Nome</label>
                                <input type="text" class="formInpt" name="txtNome" id="txtNome" value="<?php echo $row['first_name'] ?>">
                            </div>
                            <div class="col-md-4">
                                <label>Sobrenome</label>
                                <input type="text" class="formInpt" name="txtSobrenome" id="txtSobrenome" value="<?php echo $row['last_name'] ?>">
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Telefone</label>
                                <input type="text" class="formInpt" name="txtTelefone" id="txtTelefone" value="<?php echo $row['phone'] ?>">
                            </div>
                            <div class="col-md-4">
                                <label>Status</label>
                                <select class="formInpt" name="slcStatus" id="slcStatus" style='border-top: 1px solid #fff; border-right: 2px solid #fff; border-left: 1px solid #fff;'>
                                    <option value="0" <?php if($row['status'] == '0'){ ?> selected <?php } ?>>Ativo</option>
                                    <option value="1" <?php if($row['status'] == '1'){ ?> selected <?php } ?>>Inativo</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Tipo de Perfil</label>
                                <select class="formInpt" name="slcTipoPerfil" id="slcTipoPerfil" style='border-top: 1px solid #fff; border-right: 2px solid #fff; border-left: 1px solid #fff;'>
                                    <option value="1" <?php if($row['tipo_perfil'] == 'Administrador'){ ?> selected <?php } ?>>Administrador</option>
                                    <option value="2" <?php if($row['tipo_perfil'] == 'Cliente'){ ?> selected <?php } ?>>Cliente</option>
                                </select>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-12" style="text-align-last: center;">
                                <input type="button" id="btnAtualizarDados" class="btnAtualiza" value="Atualizar Dados" onclick="AtualizaUser()">
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br><br>
            </main>
        </form>
    </body>

    <footer>
        <?php
            include_once '../../../footer.php';
        ?>
    </footer>
</html>


<script>
    function escondertable() {
        var element = document.getElementById("aparecefiltro");
        element.classList.toggle("enable");
        var element = document.getElementById("olho");
        element.classList.toggle("bi-eye-slash-fill");
    }
</script>

<script>
    function AtualizaUser(){
        var mensagem = '';
        if(document.getElementById('txtEmail').value == ''){
            mensagem = mensagem + '- E-mail' + '<br>';
        }
        if(document.getElementById('txtNome').value == ''){
            mensagem = mensagem + '- Nome' + '<br>';
        }
        if(document.getElementById('txtSobrenome').value == ''){
            mensagem = mensagem + '- Sobrenome' + '<br>';
        }
        if(document.getElementById('txtTelefone').value == ''){
            mensagem = mensagem + '- Telefone' + '<br>';
        }
        if(document.getElementById('slcStatus').value == ''){
            mensagem = mensagem + '- Status' + '<br>';
        }
        if(document.getElementById('slcTipoPerfil').value == ''){
            mensagem = mensagem + '- Tipo de Perfil';
        }
        if(mensagem != ''){
            Swal.fire({
                icon: 'error',
                title: 'Para prosseguir, preencha os campos:',
                html: mensagem
            })
        }
        else{
            let formdata = new FormData($("form[name='formAtualiza']")[0])
            $.ajax({
                url:"ajaxAtualizaPerfil.php?id_user=" + <?php echo $row['id_user'] ?>,
                data: formdata,
                type: "POST",
                dataType: "json",
                contentType: false,
                processData: false,
                success:function(retorno){
                    if(retorno.status == '0'){
                        let timerInterval
                        Swal.fire({
                            icon: 'success',
                            title: 'Perfil atualizado com sucesso!',
                            showConfirmButton: false,
                            timer: 3500,
                            timerProgressBar: true,
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                        }).then((result) => {
                            window.location.href='http://www.gigagames.mytcc.com.br/administrator/painel-usuarios/editar-usuario';

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
                            title: 'Erro ao atualizar perfil!'
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
                        title: 'ERRO ao atualizar perfil!'
                    })
                }
            });
        }
    }
</script>