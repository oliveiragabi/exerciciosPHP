<?php

// try catch: tratar caso surjam  erram
//tudo que esta dentro do try o php tenta executar, caso extoure um erro, vc coloca dentro do catch 

try{
	throw new Exception("Houve um erro", 400);
	
}catch(Exception $e){ // captura todo e exception e joga dentro da variavel $e

	echo json_encode(array(
		"message" => $e->getMessage(),
		"line" => $e->getLine(),
		"file" => $e->getFile(),
		"code" => $e->getCode()
	));


}

?> 
