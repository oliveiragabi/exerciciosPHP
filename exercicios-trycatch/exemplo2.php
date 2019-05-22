<?php 

function trataNome($name){

	if(!$name){
		throw new Exception("Nenum nome foi informado", 1);
		
	}
	

	echo ucfirst($name). "<br>";


try{

	trataNome("Gabrielle");
	trataNome(" ");


}catch(Exception $e){

	echo $e->getMessage();

}finally{
	echo "Executou o try!";
}


}

?> 
