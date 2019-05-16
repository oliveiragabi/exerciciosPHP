<?php 

	class Pessoa {
		
		public $nome;

		public function falar(){

			return "O meu nome eh:  " .$this->nome; // pegando o nome, $this faz a referencia a atributos e metodos dentro de outros metodos
		} 

	}

	$gabi = new Pessoa();
	$gabi->nome = "Gabrielle Oliveira";
	print_r($gabi->falar());
 ?>