 
<?php 

	$cep = "02257000";
	$link = "https://viacep.com.br/ws/$cep/json/";

	$ch = curl_init($link);

	//RETURNTRANSFER -> ESPERA RETORNO E N SÓ IDA
	//0: nao espera volta
	// 1 espera volta
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	$response = curl_exec($ch);

	curl_close($ch);

	$data = json_decode($response, true);

	//var_dump($data);

	//traz a localidade
	// pegando a chave e exibindo o resultado
	print_r($data["localidade"]);

?>