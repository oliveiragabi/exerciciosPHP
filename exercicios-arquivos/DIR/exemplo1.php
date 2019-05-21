<?php 
//verifica se o arquivo existe, se nao existir, entao cria

	$name = "imagens";

	//se ele nao existe
	if(!is_dir($name)){
		mkdir($name, 0777, true);
		echo "diretorio " . $name. " criado com sucesso!!!";
	} else {
		rmdir($name);
		echo "o diretorio ".$name. " ja existe<br> A partir de agora o mesmo esta removido.";

	}

?>