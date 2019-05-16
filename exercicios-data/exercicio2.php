 
<?php

	
	// pegando o valor do timestamp desse dia 
	// echo strtotime("2001-09-11");

	//criando uma variavel com o timestamp dessa data
	//strtotime aceita expressao: +1 day, now e etc
	$ts = strtotime("2001-09-11");

	//exibindo dia da semana, dia no calendario, mes e ano dessa data
	echo date ("l, d/m/Y", $ts);
	

	
?> 
 
