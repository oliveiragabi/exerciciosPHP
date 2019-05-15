 
 <?php

    require_once("config.php");

	// exibindo o caminho para o armazanmento atual
	echo session_save_path();

	// retorna o status da sessao  
	var_dump(session_status());

	// retornando no switch, de uma forma mais amigavel, o status da sessão

	switch (session_status()) {
		case PHP_SESSION_DISABLED:
			echo "A sessao esta desabilidade";
			break;
		case PHP_SESSION_NONE:
			echo "A sessao esta habilitada, mas nao iniciada ";
			break;
		case PHP_SESSION_ACTIVE:
			echo "A sessao esta habilitada e existe";
			break;

	}

?> 
 
