

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

if(isset($_POST['txtNomeCad'])){
    $first_name = $_POST['txtNomeCad'];
}else{
    $first_name = "";
}
if(isset($_POST['txtSobrenomeCad'])){
    $last_name = $_POST['txtSobrenomeCad'];
}else{
    $last_name = "";
}
if(isset($_POST['txtEmailCad'])){
    $email = $_POST['txtEmailCad'];
}else{
    $email = "";
}
if(isset($_POST['txtTelefoneCad'])){
    $tell = $_POST['txtTelefoneCad'];
}else{
    $tell = "";
}
if(isset($_POST['txtSenhaCad'])){
    $senha = $_POST['txtSenhaCad'];
    $senhaHash = MD5($senha);
}else{
    $senha = "";
    $senhaHash = "";
}


include('../conexao.php');

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
                        NOW(), '$email', '$senhaHash', '$first_name', '$last_name', '2', '$email', 0, 'Cliente', '$senha'
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