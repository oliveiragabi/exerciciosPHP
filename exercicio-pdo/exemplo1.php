<?php 
	//tipo de banco, nome do banco e aonde ele esta
	$conn = new PDO("mysql:dbname=dbGabi;port=3306;host=192.168.14.224", "usr_teste", "1234");

	$stmt = $conn->prepare("SELECT * FROM tb_usuario ORDER BY deslogin");
	
	$stmt->execute();

	//fatia todas as linhas 
	$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC); //TRAZ SÓ O ASSOCIATIVO

	foreach ($resultado as $row) {
		foreach ($row as $key => $value) {

			echo "<strong>" . $key."</strong>". $value."<br>"; 

		}

		echo "========================================<br>";
	}


?> 
