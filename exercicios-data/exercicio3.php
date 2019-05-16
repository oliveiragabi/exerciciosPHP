<?php

	// o lc_all muda toda a configuração de localização p portugues
	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");


	echo strftime("%A %B");


	/* OUTRO JEITO:

	setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Sao_Paulo');
	echo strftime('%A, %d de %B de %Y', strtotime('today'));

	*/
?> 
