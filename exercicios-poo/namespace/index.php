<?php 

	require_once("config.php");

	use CLiente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Gabi");
	$cad->setEmail("gabi@gabi.com");
	$cad->setSenha("123456");

	$cad->registrarVenda();



echo "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
echo "<hr>";
?> 
