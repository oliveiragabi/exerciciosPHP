<?php 
	
	/*
	//criando um autoload p utilizar no namespace
	// recebe o nome da classe que esta sendo chamada
	spl_autoload_register(function($nomeClasse){
 
		// "falando" pro php qual pasta ele deve procurar as classes 
		$dirClass = "class";
		//todo o caminho do file path (pasta, caminho, aonde ele esta)
	    $filename = str_replace((DIRECTORY_SEPARATOR === '/' ? '\\' : '/'), DIRECTORY_SEPARATOR,$filename);

		if(file_exists($filename)){

			 require_once($filename);
		}

	});
	*/

	    spl_autoload_register(function($nomeClasse) {
        $dirClass = "class"
        
        $filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
         if (file_exists($filename)){
         require_once($filename);
         echo "<b>A classe {$filename} foi encontrada.</b>\n";
         }else {
         echo "<b>O arquivo {$filename} não existe.</b>\n";
         }
    });

?> 
