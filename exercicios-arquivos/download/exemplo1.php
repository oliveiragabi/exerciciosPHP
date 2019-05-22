<?php 
ini_set("display_errors", 1);
error_reporting(E_ALL);

	$link = "https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

	$content = file_get_contents($link);
	//recebe algo hospedado no servidor e uma url
	//ate aqui leu a img em binario

	$parse = parse_url($link);

	$basename = basename($parse["path"]);

	//passando o nome q vai ficar o local e oq vai fazer
	$file = fopen( "google.png", "w+");

	fwrite($file, $content);

	fclose($file);

?>

<img src="<?=$basename?>">