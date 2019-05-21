<?php

	//scaneia o diretorio
 	$images = scandir($images);

 	$data = array();

 	foreach ($images as $img) {
 		// o que vc esta procurando no array
 		// faz a busca no array
 		// vai tirar todos os . ou ..  
 		if(!in_array($img, array(".", ".."))){
 			$filename = "images" . DIRECTORY_SEPARATOR . $img;
 			$info = pathinfo($filename);
 			$info["size"] = filesize($filename); //tamanho do arquivo em bytes
 			$info["modified"] = date("d/m/Y H:i:s", fileatime($filename)); // mostra qnd o arq foi modificado
 			$info["url"] = "http://127.0.0.1/curso-php/php/DIR/" . $filename; // mostra a url do arq


 			array_push($data, $info);
 		}
  	}

  	echo json_encode($data);


?> 
