<?php
	/*define ("SERVIDOR", "127.0.0.1");
	
	echo SERVIDOR;
*/
	define("BANCO_DE_DADOS", [
		"127.0.0.1",
		"root",
		"password",
		"test"
	], true);  //a constante fica case insensitive

	print_r(BANCO_DE_DADOS);

?>