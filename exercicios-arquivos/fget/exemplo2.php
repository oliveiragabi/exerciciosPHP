 
<?php 

// file get contents: le o arquivo em disco

	$filename = "logo.png";
	$base64 = base64_encode(file_get_contents($filename)); //essa função le o conteúdo de um arquivo inteiro, como se fosse o fread
	//usando essa outra função para converter de binario para base 64 

	$fileinfo = new finfo(FILEINFO_MIME_TYPE);
	$mimetype = $fileinfo->file($filename);

	$base64_encode = "data:". $mimetype . ";base64, " . $base64;
 
?> 

<a href="<?=$base64_encode?>" target="_blank">LINK PARA IMAGEM </a>
<img src="<?=$base64_encode?>">
