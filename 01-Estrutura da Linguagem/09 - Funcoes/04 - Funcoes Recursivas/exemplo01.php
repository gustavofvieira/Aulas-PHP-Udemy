<?php
$hierarquia = array(
	array(
		'nome_cargo' => 'CEO',
		'subordinados' => array(
			//Inicio: Diretor Comercial
			array(
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' => array(
				//Inicio: Gerente de Vendas
					array(
						'nome_cargo' => 'Gerente de Vendas'
					)
					//Término: Gerente de vendas
				)
			),
			//Término: Diretor Comercial
			//Inicio: Diretor Financeiro
			array(
				'nome_cargo' => 'Diretor Financeiro',
				'subordinados' => array(
					//Inicio: Gerente de contas a pagar
					array(
						'nome_cargo' => 'Gerente de contas a pagar',
						'subordinados' => array(
							//Inicio: Supervisor de pagamentos
							array(
								'nome_cargo' => 'Supervisor de pagamentos'

							)
							//Término: Supervisor de pagamentos

						)
					),
				 //Término: Gerente de contas a pagar
				// Inicio: Gerente de compras
					array(
						'nome_cargo' => 'Gerente de Compras',
						'subordinados' => array(
							//Inicio: Supervisor de suprimentos
							array(
								'nome_cargo' => 'Supervisor de suprimentos'
							)
							//Término: Supervisor de suprimentos
						)
					)
				// Término: Gerente de compras	
				)

			)
			//Término: Diretor Financeiro
		) 
	)
);
function exibe($cargos){
	$html = "<ul>";
	foreach ($cargos as $cargo) {
		$html .= "<li>";

		$html .= $cargo['nome_cargo'];//colchetes acessa a chave, o atributo do array
		if(isset($cargo['subordinados']) && count(['subordinados']) > 0){//verificando se a variavel cargo existe com o isset e contando quantos tem e se é maior que 0 
			$html .= exibe($cargo['subordinados']);
		}
		$html .= "</li>";

	}

	$html .= "</ul>";//.= atribuindo o valor ul pra fechar a tag
	return $html;
}
echo exibe($hierarquia);