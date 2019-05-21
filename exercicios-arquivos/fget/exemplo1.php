 
<?php 

// fget: lê linha por linha de um arquivo
//fread: é necessário passar quantos bytes vc quer ler do arquivo. (filesize p pegar o tamanho iteiro do arquivo)

	$filename = "usuarios.csv";

	if(file_exists($filename)){
		$file = fopen($filename, "r+");

		//explode quebra o separador, que é a virgula
		$headers = explode(", ", fgets($file));

		$data = array();

		// qnd for diferente disso, sai do laço
		while($row = fgets($file)){
			$rowData = explode(", ", $row);
			$linha = array();

			for($i=0; $i< count($headers); $i++){

				$linha[$headers[$i]] = $rowData[i]; 

			}

			array_push($data, $linha);
		}

		fclose($file);

		echo json_encode($data);
	}

 
?>