<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
include_once('../conexao.php');

require_once '/home/ubuntu/vendor/autoload.php';

date_default_timezone_set('America/Sao_Paulo');

$today = date("Y-m-d h:i:s");

$query_selectUserr = "SELECT * FROM users WHERE id_user = " . $_GET['id_user'];
$selectUserr = mysqli_query($conexao, $query_selectUserr);
$arrayUserr =  mysqli_fetch_array($selectUserr);

$destino =  $arrayUserr['e_mail'];

$transport = new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl');
$transport->setUsername('gigagames.mytcc@gmail.com')->setPassword("vnpadbhnzqkyqrag");


$mailer = new Swift_Mailer($transport);

$message = new Swift_Message('Teste');
include('templateEmail.php');
$message
->setFrom(['gigagames.mytcc@gmail.com' => 'Giga Games'])
->setTo(["$destino" => 'User'])
->setSubject('Giga Games')

->setBody("$emailBody", 'text/html');

$result = $mailer->send($message);


?>
	