<?php  

	echo "Hello World";
	
	$var=1;
	$var2 =2;

	echo "<br>";
	
	echo $var + $var2;
 
	echo "<br>";

	echo "teste";

	// VENDO IP DA MÁQUINA
	// $_SERVER PEGA INFORMAÇÕES DO AMBIENTE (Usuario e servidor)
	$ip = $_SERVER['REMOTE_ADDR'];
	echo "<br>";
	echo $ip;

	//PEGANDO O NOME DO ARQ
	$nome = $_SERVER['SCRIPT_NAME'];
	echo "<br>";
	echo $nome;


?>
