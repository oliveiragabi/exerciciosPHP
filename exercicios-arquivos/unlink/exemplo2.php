<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

if(!is_dir("imagens")) mkdir("imagens");

//a funcao scandir le um diretorio e transforma em um array
foreach (scandir("imagens") as $item) {
	// o if esta dizendo que nesse array n pode conter o . e o ..
	if(!in_array($item, array(".", ".."))){
		unlink("imagens/" . $item);
	}
}

echo "ok";


?> 
