<?php 

	class Carro {
		
		public $modelo;
		public $motor;
		public $ano;


		public function getModelo()
		{    // pegando o valor

			return $this->modelo;
		} 


		public function setModelo($modelo)  
		// igualando os valores a partir da linha 20
		// o atributo recebe o valor do parâmetro
		{
			$this->modelo = $modelo;
		}


		public function getMotor():float
		{    // pegando o valor

			return $this->motor;
		} 


		public function setMotor($motor)  
		// igualando os valores a partir da linha 20
		// o atributo recebe o valor do parâmetro
		{
			$this->motor = $motor;
		}

		public function getAno():int
		{    // pegando o valor

			return $this->ano;
		} 


		public function setANo($ano)  
		// igualando os valores a partir da linha 20
		// o atributo recebe o valor do parâmetro
		{
			$this->ano = $ano;
		}

		public function exibir()
		{
			return array(
				"modelo" => $this->getModelo(),
				"motor" => $this->getMotor(),
				"ano" => $this-> getAno()

			);
		}
}

		$gol = new Carro();
		$gol->setModelo("Gol GT");
		$gol->setMotor("1.6");
		$gol->setAno("2019");

		var_dump($gol->exibir()); //pedindo p exibir todas as infos do obj

 ?>