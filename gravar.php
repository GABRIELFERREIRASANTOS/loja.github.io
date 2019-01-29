<!DOCTYPE html>
<html>
<head>
	<title></title>
	</head>
	<body>
	<?php

	date_default_timezone_set("America/Sao_Paulo");
	//pegar os dados do formulario
	$nome = $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$endereco = $_POST["endereco"];
	$cidade = $_POST["cidade"];
	$estado = $_POST["estado"];

	// $dtcadastro = date("Y-m-d"); // MUDAR DEPOIS - padrão do banco
	
	// Montar a instrução de gravação
	$sql = "insert into cliente values
	(null,'".$nome."','".$sobrenome."','".$email."','".$senha."','".$endereco."','".$cidade."','".$estado."')";

	 // abrir a conexão com o banco
	include_once 'conexao.php';
	if(mysqli_query($con, $sql)){
		$msg = "Gravado com sucesso";
	}else{
		$msg = "Erro ao gravar";
	}
	mysqli_close($con);
	echo"<script>alert('".$msg."');location.href='loja.html';</script>";
	
	?>
	</body>
</html>