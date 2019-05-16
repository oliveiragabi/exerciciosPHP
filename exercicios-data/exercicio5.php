<?php 

	$dt = new DateTime(); // objeto
	$periodo = new DateInterval("P15D"); //especificando no construtor qual é o periodo, 
										//P de periodo, a qtd do periodo e D de dia
										// olhar documentacao php dateinterval
	echo $dt->format("d/m/Y H:i:s");

	$dt->add($periodo);  // somando na variavel dt a variavel periodo
	// adc uma data, espera como parametro uma outra classe que guarda o intervalo de periodo
 
	echo "<br>";

	echo $dt->format("d/m/Y H:i:s");  // -> objeto
						// pra acessar um método da classe tem que usar ->


?> 
