<?php 

//permite registrar mais de uma função como funções de autoload
// spl: standard php lib

function incluirClasses($nomeClasse){
	//verificando se o nome desse arq existe no diretorio 
	if(file_exists($nomeClasse . ".php") === true){
		require_once($nomeClasse . ".php");
  }
}

spl_autoload_register("incluirClasses");
//função anonima
spl_autoload_register(function($nomeClasse){
	if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true){
		require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse .".php");
  }
});


$carro = new DelRey();
$carro->acelerar(80);

?>
