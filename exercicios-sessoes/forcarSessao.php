 
 <?php

 	//recupera id
 	session_id("arao0gai6lodvaplpr0u1tutc0");

    require_once("config.php");

	// forçando sessoes novas a cada refresh
    session_regenerate_id(); 
    // exibindo
	echo "<hr>" . session_id() . "<hr>"  ;
	echo "<br>";
	var_dump($_SESSION);

?> 
 
