
<?php
$valor1 = (float) 0;
$resultado = (float) 0;

const ERRO_CAIXA_VAZIA = "Não foi posivel calcular , pois existem caixas vazias!";



if(isset($_POST['btnCalc'])){
    $valor1 = $_POST['txtn1'];

    if($valor1 == ''){
	
		echo("<span class='msgErro'>" .ERRO_CAIXA_VAZIA.   "</span>");
	}else{
        if(is_numeric($valor1)){
            $resultado =  pi() * $valor1 * $valor1;
        }else{
            echo ('<script>
            alert("É necessário que todas as caixas tenham numeros válidos!");
        </script>');
        }
      
   
    }
    

}



?>
<html>
    <head>
        <title>Atividade</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculo Area do Circulo
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="">
						Valor 1:<input type="text" name="txtn1" value="" placeholder="Digite seu numero aqui"> <br>
                       
                        <input type="submit" name="btnCalc" value="Calcular">

						<div id="resultado">
                         <?php  echo(round($resultado,2)); ?>
						</div>
                        
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>

