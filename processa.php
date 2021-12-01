<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha  = filter_input(INPUT_POST, 'senha' , FILTER_SANITIZE_STRING);
$senha = md5($senha);
$tell = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$situ = "3";
$niveis_acesso_id = $situ;

$sqlinsert = "INSERT INTO usuarios(nome, email, senha, telefone, situacoe_id, niveis_acesso_id, created) VALUES ('$nome', '$email', '$senha', '$tell', '$situ', '$niveis_acesso_id',NOW())";
$resultado_usuario = mysqli_query($conn, $sqlinsert);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: cadastro.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: cadastro.php");
}
