<?php
	include 'conexao.php';

	$nome = $_POST['nome'];
	$user = $_POST['user'];
	$senha = $_POST['senha'];

	$query = "INSERT INTO login(nomeUser,nickaname,senha) values ('$nome','$user','$senha')";

	$inserir = mysqli_query($conexao,$query);

	if($inserir){
		header('Location: login.php');
	}else{
		echo "Usuário não registrado.";
	}

?>