<?php 
	
	class Endereco(){

		private $logradouro;
		private $numero;
		private $cidade;

		public function __construct($a, $b, $c){

			$this->logradouro = $a;
			$this->numero = $b;
			$this->cidade = $c;

		}

		public function __destruct($a, $b, $c){  //destruindo variaveis

			var_dump("DESTRUIR");

		}

		public function __toString(){
			return $this->logradouro. ", " . $this->numero. ", " . $this->cidade;
		} 


	}

	$meuEnd = new Endereco("Rua Ademar Saraiva","123","Santos");
	echo $meuEnd;
	/*var_dump($meuEnd);

	unset($meuEnd); //tirando da memoria
	*/
 ?> 
 
 
