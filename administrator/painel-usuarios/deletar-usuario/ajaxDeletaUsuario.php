

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();

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
        $query ="DELETE FROM users WHERE id_user = '{$idUser}'";
        $update = mysqli_query($conexao, $query);

        if($update){
            $status =  '0';
        }else{
            $status =  '1';
        };
    };
?>