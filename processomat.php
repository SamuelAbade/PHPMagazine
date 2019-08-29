<?php
	include 'conexao.php';

	$titulo = $_POST['titulo'];
	$materia = $_POST['mat'];
	
	$query = "insert into materia(titulo, texto) values ('$titulo','$materia')";
	$inserir = mysqli_query($conexao,$query);  

	if($inserir){
		header('Location: index2.php');
	}else{
		echo "insert into materia(titulo, texto) values ('$titulo','$materia')";
	}

?>