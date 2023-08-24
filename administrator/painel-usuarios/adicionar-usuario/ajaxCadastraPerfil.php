

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

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


include_once('../../../conexao.php');

$query_select = "SELECT username FROM users WHERE username = '$email'";
$select = mysqli_query($conexao, $query_select);
$array =  mysqli_fetch_array( $select );
$logarray = isset($array['username']) ? $array['username']:null;

    if($email == "" || $email == null){
        $status =  '9';
    }else{
        if($logarray == $email){
            $status =  '2';
        }else{
            $query = "INSERT INTO users(
                        insert_date, username, password, first_name, last_name, nu_perfil_usuario, e_mail, status, tipo_perfil, pass_hash
                      )VALUES(
                        NOW(), '$email', 'd41f7d9006d1aeef42dbc4bd06b7e118', '$first_name', '$last_name', '2', '$email', 0, 'Cliente', 'Giga@2022'
                      )";
            $insert = mysqli_query($conexao, $query);

            $query_selectRs = "SELECT MAX(id_user) as maxId FROM users WHERE username = '$email'";
            $selectRs = mysqli_query($conexao, $query_selectRs);
            $arrayRs =  mysqli_fetch_array($selectRs);

            if($insert){
                $status =  '0';
            }else{
                $status =  '1';
            }
        }
    }

    $data = ['status' => $status, 'rs_user' => $arrayRs['maxId']];
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
?>