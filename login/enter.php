<?php
    session_start();
    include('../conexao.php');

    $username = mysqli_real_escape_string($conexao, $_POST['txtEmail']);
    $password = mysqli_real_escape_string($conexao, $_POST['txtSenha']);
    $pass = md5($password);


    $queryUsuario = "select * from users where username ='$username' and password = '$pass'";

    $result_queryUsuario = mysqli_query($conexao, $queryUsuario);

    $row = mysqli_fetch_array($result_queryUsuario);

    $id_user = $row['id_user'];
    $tipo_perfil = $row['tipo_perfil'];
    $first_name = $row['first_name'];

    if($row['username'] == $username && $row['password'] == $pass){
        $iduser = $id_user;
        $_SESSION['id_user'] = $id_user;
        $_SESSION['username'] = $username;
        $_SESSION['tipo_perfil'] = $tipo_perfil;
        $_SESSION['first_name'] = $first_name;
        $_SESSION['loggedin'] = true;
    }
    else{
        $_SESSION['nao_autenticado'] = true;
    }

    
    $retorno = array('id_user' => $iduser, 'tipo_perfil' => $tipo_perfil);
    print (json_encode($retorno));
    exit();
?>