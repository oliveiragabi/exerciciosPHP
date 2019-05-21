<form method="POST" enctype="multipart/form-data"> 
<!-- permite que vc oloque o tipo de informação que vc esta enviando -->
<!-- multipart/form-data: isso signifca que este formulario sera enviado como dados binarios -->
<!-- se o atributo enctype não for colocado, o upload do lado do php não vai funcionar, pois irá ser recebido o nome do arquivo e não o conteúdo -->
	<input type="file" name="fileUpload">
	<button type="submit"> Enviar </button>
</form>

<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);



// quando eu faço o upload de algum arquivo, é criada uma pasta temporaria no servidor em que esta vai recebendo as partes do arquivo(imagem, video e etc), quando termina de receber tudo no servidor, o arquivo fica a disposição do usuario para ser movido para pasta que deseja 

	if($_SERVER["REQUEST_METHOD"] === "POST"){
		// $_files serve para tratar arquivos que foram enviados via upload pelo metodo post
		$file = $_FILES["fileUpload"];
		if($file["error"]){
			throw new Exception("Error:" . $file["error"] );
			
		}

		$dirUploads = "uploads";

		if(!is_dir($dirUploads)){
			mkdir($dirUploads);
		}

		if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
			echo "upload realizado com sucesso";

		}else
		{
			throw new Exception("Não foi possível realizar o upload");
			
		}

	}


?> 
