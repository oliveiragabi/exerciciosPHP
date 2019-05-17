<?php //statement prepare //voltar ao php 6 para cod rodar
	ini_set("display_errors", 1);
	error_reporting(E_ALL);

	$conn = new msqli("localhost", "usr_teste", "1234", "dbGabi");

	if($conn->connect_error){
		echo "error: ". $conn->connect_error;
	}

	$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES (?, ?)");

	// ss diz respeito as variaveis, que são duas string's
	// tem que criar uma variavel para cada parametro e atribuir os valores, nao pode passar direto 
	$stmt-> bind_param("ss", $login, $senha);

	$login = "user";
	$senha = "1234";

	// só entende qnd chega nesse método, ai carrega e executa no bdd
	$stmt = execute();

	$login = "local";
	$senha = "1234";





?> 
