<?php
    include_once('../../conexao.php');
?>

<?php
    # Executa a query de busca dos usuários
    $buscaUsersCad = "SELECT * FROM users";
    $result_buscaUsersCad = mysqli_query($conexao, $buscaUsersCad);
    $countUsers = mysqli_num_rows($result_buscaUsersCad);
?>

<?php
    # Verifica o tipo de perfil do usuário logado
    $buscaUser = "SELECT * FROM users where id_user = 1";
    $result_queryUser = mysqli_query($conexao, $buscaUser);
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- ==========[FAVICON]========== -->
        <link rel="shortcut icon" href="../../images/logo/favicon.ico" type="image/x-icon">
        <link rel="icon" href="../../images/logo/favicon.ico" type="image/x-icon">
    </head>

    <header>
        <?php
            include_once '../../topmenuAdm.php';
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
        </style>
    </header>
    
    <body>
        <div class="panel-heading1">
            <h3>
                <center><label>Cockpit de Usuários</label></center>
            </h3> 
        </div>
        <main class="container">
            <div class="content">
                <div class="panel-heading" style="border-radius: 8px 8px 0px 0px; border: 1px solid #cfcfcf; box-shadow: 0px 10px 30px -3px rgba(0,0,0,0.1);">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>
                                <i class="bi bi-person-check-fill" style="color:#fff;"></i>
                                <label style="color:#fff;">Usuários Cadastrados:</label>
                                <span class="badge badge-secondary" style="background-color:#fff; color:#5A9BE6; font-size:20px;"><?php echo $countUsers; ?></span>
                            </h3>
                        </div>
                        <div class="col-md-6 alinha-botao-direita">
                            <i id="olho2" class="bi bi-eye-fill" onclick="escondertable()"></i></button>
                        </div>
                    </div>
                </div>
                <div class="disable" id="aparecefiltro">
                <div class="panel-body" style="background-color: #fff; border: 1px solid #cfcfcf; border-radius: 0px 0px 8px 8px; width: 100%!important; box-shadow: 0px 10px 30px -3px rgba(0,0,0,0.1);">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped table-hover table-bordered" style="align:center, font-size: 25px!important; width:100%!important;" id="tbCadastrados">
                                <thead>
                                    <tr align="center" style="font-size: 12px; background-color:#5A9BE6; color: white;">
                                        <td><center><b><div class="translateMult en">Login</div></b></center></td>
                                        <td><center><b><div class="translateMult pt-br">Nome de Usuário</div></b></center></td>
                                        <td><center><b><div class="translateMult pt-br">Status do Perfil</div></b></center></td>
                                        <td><center><b><div class="translateMult pt-br">Tipo de Perfil</div></b></center></td>
                                        <td><center><b><div class="translateMult pt-br">Editar</div></b></center></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($rowUser = mysqli_fetch_array( $result_buscaUsersCad )) { ?>
                                        <tr align="center" style="font-size: 12px; background-color:white">
                                            <td><center><?php echo $rowUser['e_mail']; ?></center></td>
                                            <td><center><?php echo $rowUser['first_name']; echo $rowUser['last_name']; ?></center></td>
                                            <td>
                                                <center>
                                                    <?php
                                                        if ($rowUser['status'] == 0) {
                                                            echo 'Ativo';
                                                        }
                                                        else {
                                                            echo 'Bloqueado';
                                                        }
                                                    ?>
                                                </center>
                                            </td>
                                            <td><center><?php echo $rowUser['tipo_perfil']; ?></center></td>
                                            <td style="font-size: 16px;">
                                                <center>
                                                    <a href="editar-usuario/?id_user=<?php echo $rowUser['id_user'];?>">
                                                        <div class="bi bi-pencil-fill hoverAzul" style="color: black; cursor: hand;"></div>
                                                    </a>
                                                </center>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <br><br><br><br>
        </main>
    </body>

    <footer>
        <?php
            include_once '../../footer.php';
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