  <?php

	$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			// inicio: diretor comercial
			array(
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' => array(
					array(
						// inicio: gerente de vendas
	 						'nome_cargo' => 'Gerente de Vendas'
					) // termino: gerente de vendas
				)
			),
			// termino gerente de vendas 

			//inicio diretor financeiro
			array(
				'nome_cargo' => 'Diretor financeiro',
				'subordinados' => array(
					// inicio gerente de contas a pagar
					array(
						'nome_cargo' => 'Gerente de Contas a Pagar',
						'subordinados' => array(
							//Inicio supervisor de pagaments
							array(
								'nome_cargo' => 'Supervisor de Pagamentos'
							)
							//Termino supervisor de pagaments
						)
					),//termino gerente de contas a pagar

					//inicio gerente de compras
					array(
						'nome_cargo' => 'Gerente de Compras',
						'subordinados' => array(
							// inicio Supervisor de Suprimentos
							array(
								'nome_cargo' => 'Supervisor de Suprimentos'
							)
							// termino Supervisor de Suprimentos
						)
					) //termino gerente de compras
				)
			)// termio diretor financeiro 
		)
	)

);

	 function exibe($cargos){
	 	$html = '<ul>';
	 	
	 	foreach ($cargos as $cargo) {
	 		$html .= "<li>";
	 		$html .= $cargo['nome_cargo'];
	 		
	 		// verificando se o index subordinados foi definido e se dentro de subordinados tem pelo menos + de 0 item, se tiver coloca mais uma lista
	 		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
	 			$html .= exibe($cargo['subordinados']);

	 		}
	 		$html .= "</li>";
	 	}
	 	
	 	$html .= "</ul>";

	 	return $html;

	 }

	 echo exibe($hierarquia);

?> 
 

 

