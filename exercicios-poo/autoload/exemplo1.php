 
<?php 

//essa função recebe como parametro o nome da classe que foi chamada 
// 
function __autoload($nomeClasse){
	require_once("$nomeClasse.php");
}


$carro = new DelRey();
$carro->acelerar(80);



?> 
 
