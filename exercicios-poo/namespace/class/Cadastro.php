<?php 


class Cadastro
{
	private $nome;
	private $email;
	private $senha;


	public function getNome():string
	{ // "estou chamando o atributo nome declarado na linha 5"
		return $this->nome;
	}

	public function setNome($nome)
	{ // "estou chamando o atributo nome declarado na linha 5"
		$this->nome = $nome;
	}

	public function getEmail():string
	{ // "estou chamando o atributo nome declarado na linha 5"
		return $this->email;
	}

	public function setEmail($email)
	{ // "estou chamando o atributo nome declarado na linha 5"
		$this->email = $email;
	}

	public function getSenha():string
	{ // "estou chamando o atributo nome declarado na linha 5"
		return $this->senha;
	}

	public function setSenha($senha)
	{ // "estou chamando o atributo nome declarado na linha 5"
		$this->senha = $senha;
	}

	public function __toString(){

		return json_encode(array(
			"nome" => $this->getNome(),
			"email" => $this->getEmail(),
			"senha" => $this->getSenha()

		));

	}
}

?> 
