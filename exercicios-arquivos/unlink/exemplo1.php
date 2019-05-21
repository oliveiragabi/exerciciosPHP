<?php 
	
	//criando arquivo
	$file = fopen("teste.txt", "w+");


	//fechando arquivo
	fclose($file);


	//deletando arquivo
//	unlink("teste.txt");

	//se colocasse a variavel direto esse metodo iria remover a mesma e não o arquivo. 
	
	echo "arquivo removido c sucesso";


?> 
