

<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

//cookie é uilizado pra armazenar informações na maquina do usuario temporariamente 
//um cookie é um arquivo de texto de pequno taamnho no qual armazenamos informações



	$data = array(
		"empresa" => "Nido",
		"funcionaria" => "Amanda"

	);

	//nome, valor do cookie e tempo de duração do cookie  
	setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

	echo "OK";


?> 
