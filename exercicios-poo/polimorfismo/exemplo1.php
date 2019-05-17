<?php 

abstract class Animal
{

	public function falar(){

		return "Som";

	}

	public function mover(){

		return "Anda";
	
	}

}

class Cachorro extends Animal {
	
	public function falar(){

		return "Late";

	}


}

class Gato extends Animal {
	
	public function falar(){

		return "Mia";

	}

}

class Peixe extends Animal {
	
	public function mover(){

		return "Nada";

	}

}

class Passaro extends Animal {
	
	public function mover(){

		return "Voa e " . parent::mover(); //chamando a classe pai, acessando estaticamente

	}


	public function falar(){

		return "Canta";

	}

}


$cachorro = new Cachorro();
echo "O cachorro: " . $cachorro->falar() . "<br>";
echo "O cachorro: " . $cachorro->mover() . "<br>";

echo "<hr>";


$gato = new Gato();
echo "O gato: " .$gato->falar() . "<br>";
echo "O gato: " .$gato->mover() . "<br>";

echo "<hr>";


$peixe = new Peixe();
echo "O peixe: " .$peixe->mover() . "<br>";

echo "<hr>";

$passaro = new Passaro();
echo "O passaro: " .$passaro->falar() . "<br>";
echo "O passaro: " .$passaro->mover() . "<br>";

echo "<hr>";


?> 
 
