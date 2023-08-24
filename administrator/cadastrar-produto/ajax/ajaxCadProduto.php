<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();
include_once('../../../conexao.php');

$criador = $_SESSION['id_user'];

$baseCaminho = "http://gigagames.mytcc.com.br/Fotos/Produtos/";
$uploaddir = '/var/www/gigagames.mytcc.com.br/Fotos/Produtos/';
$nomeArq = basename($_FILES['flImgProduto']['name']);
$uploadfile = $uploaddir . $nomeArq;

if (is_dir($uploaddir) && is_writable($uploaddir)) {
    echo "Diretório existente e com permissões de leitura/escrita";
} else {
    echo "Diretório não existe ou não possui permissões de litura/escrita";
}

if (move_uploaded_file($_FILES['flImgProduto']['tmp_name'], $uploadfile)) {
    echo "Arquivo válido e enviado com sucesso.";
} else {
    echo "Possível ataque de upload de arquivo!". $_FILES['flImgProduto']['error'];
}



if(isset($_POST['txtNomeProd'])){
    $nomeProd = $_POST['txtNomeProd'];
}
if(isset($_POST['slcCategoria'])){
    $plataformaProd = $_POST['slcCategoria'];
}
if(isset($_POST['hdnPrecoFormatado'])){
    $precoProd = $_POST['hdnPrecoFormatado'];
}
if(isset($_POST['txtDescricao'])){
    $descProd = $_POST['txtDescricao'];
}

$queryInsert = "INSERT INTO produtos(
    criador, dataInsercao, nomeProd, descricaoProd, plataformaProd, precoProd, caminhoImagem, status
)VALUES(
    $criador, NOW(), '$nomeProd', '$descProd', '$plataformaProd', '$precoProd', '$uploaddir$nomeArq', 'Ativo'
)";
$executaInsert = mysqli_query($conexao, $queryInsert);
?>