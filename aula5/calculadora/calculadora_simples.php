<?php
$valor1 = (float) 0;
$valor2 = (float) 0;
$opcao = (string) null;
$resultado = (float) 0;

if(isset($_POST['btncalc'])){
 	$valor1 = $_POST['txtn1'];
 	$valor2 = $_POST['txtn2'];
 	$opcao = $_POST['rdocalc'];

	if($valor1 == '' || $valor2 == '')
	{
		echo("<span class='msgErro'> Não é posivel calcular com caixas vazias! </span>");
	}else
	{

 		if($opcao == 'somar'){

		$resultado = $valor1 + $valor2;

 		}elseif($opcao == 'subtrair'){

   		 $resultado = $valor1 - $valor2;

 		}elseif($opcao == 'multiplicar'){
		$resultado = $valor1 * $valor2;

 		}elseif($opcao == 'dividir'){
		$resultado = $valor1 / $valor2;
 	}
 
}

}

?>


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
						Valor 1:<input type="text" name="txtn1" value="0" > <br>
						Valor 2:<input type="text" name="txtn2" value="0" > <br>
						<div id="container_opcoes">
							<input type="radio" name="rdocalc" value="somar" checked>Somar <br>
							<input type="radio" name="rdocalc" value="subtrair" >Subtrair <br>
							<input type="radio" name="rdocalc" value="multiplicar" >Multiplicar <br>
							<input type="radio" name="rdocalc" value="dividir" >Dividir <br>
							
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

