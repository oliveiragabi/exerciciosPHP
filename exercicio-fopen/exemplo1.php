<?php

	//primeiro parametro: caminho da pasta
	// segundo parametro: como vc vai controlor o arquivo ?
	$file = fopen("log.txt", "w+");
	//a partir de agr a variavel $file é do tipo resource


	//esse método recebe dois parametros
	// primeiro: uma variavel resource 
	//segundo: dados que quero colocar no arquivo
	fwrite($file, date("Y-m-d H:i:s"));

	//lberando da memoria e 
	//fechando o arquivo 

	
	fclose($file);

	echo "arquivo criado c sucesso";



?> 
