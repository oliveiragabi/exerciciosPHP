<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

	//scaneia o diretorio
 	$imagens = scandir($imagens);

 	$data = array();

 	foreach ($imagens as $img) {
 		// o que vc esta procurando no array
 		// faz a busca no array
 		// vai tirar todos os . ou ..  
 		if(!in_array($img, array(".", ".."))){
 			$filename = "imagens" . DIRECTORY_SEPARATOR . $img;
 			$info = pathinfo($filename);
 			$info["size"] = filesize($filename); //tamanho do arquivo em bytes
 			$info["modified"] = date("d/m/Y H:i:s", fileatime($filename)); // mostra qnd o arq foi modificado
 			$info["url"] = "http://127.0.0.1/curso-php/php/DIR/" . $filename; // mostra a url do arq


 			array_push($data, $info);
 		}
  	}

  	echo json_encode($data);


?> 
