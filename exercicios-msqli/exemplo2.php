<?php //statement prepare //voltar ao php 6 para cod rodar
	ini_set("display_errors", 1);
	error_reporting(E_ALL);

	$conn = new msqli("localhost", "usr_teste", "1234", "dbGabi");

	if($conn->connect_error){
		echo "error: ". $conn->connect_error;
	}

	$result = $conn->query("SELECT * FROM tb_usuario ORDER BY deslogin");

	//convertendo pra json
	$data = array();

	// esse método retornar um dado se ele existir
	// SE QUISER TRAZER SÓ OS NOMES DA COLUNA USAR O MSQLI_ASSOC
	while($row = $result->fetch_array(MSQLI_ASSOC)){
		
		array_push($data, $row);
//		var_dump($row);
	}

	echo json_encode($data);

?> 
