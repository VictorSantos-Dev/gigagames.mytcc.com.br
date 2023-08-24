

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();

if(isset($_POST['txtNome'])){
    $first_name = $_POST['txtNome'];
}else{
    $first_name = "";
}
if(isset($_POST['txtSobrenome'])){
    $last_name = $_POST['txtSobrenome'];
}else{
    $last_name = "";
}
if(isset($_POST['txtEmail'])){
    $email = $_POST['txtEmail'];
}else{
    $email = "";
}
if(isset($_POST['txtTelefone'])){
    $tell = $_POST['txtTelefone'];
}else{
    $tell = "";
}
if(isset($_POST['slcStatus'])){
    $status = $_POST['slcStatus'];
}else{
    $status = "";
}
if(isset($_POST['slcTipoPerfil'])){
    $tipoPerfil = $_POST['slcTipoPerfil'];
    if($tipoPerfil == 0){
        $descPerfil = 'Administrador';
    }else{
        $descPerfil = 'Cliente';
    }
}else{
    $tipoPerfil = "";
}

$idUser = $_GET['id_user'];

$idUpdatter = $_SESSION['id_user'];


include_once('../../../conexao.php');

$query_select = "SELECT username FROM users WHERE username = '$email'";
$select = mysqli_query($conexao, $query_select);
$array =  mysqli_fetch_array( $select );
$logarray = isset($array['username']) ? $array['username']:null;

    if($email == "" || $email == null){
        $status =  '9';
    }else{
        $query ="UPDATE users set
                    update_date = NOW(),
                    updatter = '{$idUpdatter}',
                    username = '{$email}',
                    first_name = '{$first_name}', 
                    last_name = '{$last_name}', 
                    nu_perfil_usuario = '{$tipoPerfil}', 
                    e_mail = '{$email}', 
                    status = '{$status}', 
                    tipo_perfil = '{$descPerfil}'
                    WHERE id_user = '{$idUser}'                                                                                                                                                  
        ";
        $update = mysqli_query($conexao, $query);

        if($update){
            $status =  '0';
        }else{
            $status =  '1';
        };
    };

    $data = ['status' => $status];
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
?>