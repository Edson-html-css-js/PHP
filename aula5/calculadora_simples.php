<?php


// _once - faz o import e valida se esse arquivo já não foi importado na memoria
/*
 include
 include_once

 require
require_once */

//importe do arquivo de função que realiza os calculos matematicos

require_once('modulos/calculos.php');

$valor1 = (float) 0;
$valor2 = (float) 0;
$opcao = (string) null;
$resultado = (float) 0;
// 1º forma de criar uma cost
// define("ERRO_CAIXA_VAZIA", "Não foi posivel calcular , pois existem caixas vazias!");// permite a criação de uma const no php
//2º foema de criar uma const en php (mais atual)

const ERRO_CAIXA_VAZIA = "Não foi posivel calcular , pois existem caixas vazias!";

const ERRO_CAIXA_LETRA ="Esse campo só aceita Numeros!";

const ERRO_CAIXA_OPERADORES = "É PRECISO SELECIONAR, UMA DAS 4 OPERAÇÕES PARA CONTINUAR!";

if(isset($_POST['btncalc']))//isset  verifica se algo existe. uma variavel ou um botão
{
 	$valor1 = $_POST['txtn1'];
 	$valor2 = $_POST['txtn2'];
 	

	if(isset($_POST['rdocalc']))
	{
		$opcao = $_POST['rdocalc'];



		if($valor1 == "" || $valor2 == "")
		{
			echo("<span class='msgErro'>" .ERRO_CAIXA_VAZIA.   "</span>");
		}else
		{
			if(is_numeric($valor1) && is_numeric($valor2) ){
		
				// Chama a função para realizar o calculo matematico	
				 $resultado = operacoesMatematicas($valor1, $valor2, $opcao);


				// 	if($opcao == 'somar'){

				// 	$resultado = $valor1 + $valor2;

				// 	}elseif($opcao == 'subtrair'){

				// 	 $resultado = $valor1 - $valor2;

				// 	}elseif($opcao == 'multiplicar'){
				// 	$resultado = $valor1 * $valor2;

				// 	}elseif($opcao == 'dividir'){
				// 	$resultado = $valor1 / $valor2;
				// }

			}//validação para caracteres não numericos
			else{
				echo("<span class='msgErro'>" .ERRO_CAIXA_LETRA.   "</span>");
			}

			
		
		}//validação de caixa vazia
	}//validação do rdcalc	
	else{
		echo("<span class='msgErro'>" .ERRO_CAIXA_OPERADORES.   "</span>");
	}

 }	//validação se o botão foi clicado


	   
	

?>
  <!--para comentar em PHP -->


<html>
    <head>
        <title>Calculadora - Simples</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
          
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples Edson
				<br>
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="">
						Valor 1:<input type="text" name="txtn1" value=""  placeholder="Digite seu numero aqui" > <br>
						                                        <!--placeholder > é para algo no input, como'digite seu email aqui' -->
						Valor 2:<input type="text" name="txtn2" value="" placeholder="Digite seu numero aqui"> <br>
						<div id="container_opcoes">
							<input type="radio" name="rdocalc" value="somar" 
							<?=$opcao=="somar" ? "checked": "" ?>> + Somar <br>

							<input type="radio" name="rdocalc" value="subtrair"
							<?=$opcao=='subtrair' ? 'checked' : "" ?>> - Subtrair <br>
									

							<input type="radio" name="rdocalc" value="multiplicar" 
							<?=$opcao=="multiplicar" ? "checked": "" ?>> * Multiplicar <br>

							<input type="radio" name="rdocalc" value="dividir" 
							<?=$opcao=="dividir" ? "checked": "" ?>> /  Dividir <br>
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						</div>	
						<div id="resultado">
							<?php  echo($resultado); ?>

						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>

