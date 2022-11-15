<?php 
require_once("conexao.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$sql = "INSERT INTO cliente (nome, email, senha, cep, rua, bairro, cidade, estado) values ('$nome', '$email',
'$senha', '$cep', '$rua', '$bairro', '$cidade', '$estado');";

$query = mysqli_query ($conexao, $sql);

header ("Location: login.php");


?>