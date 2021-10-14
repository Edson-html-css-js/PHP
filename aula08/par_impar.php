<?php 
//Inport do arquivo de funcoes do projeto
require_once('modulo/functions.php');

//declarando variaveis 
$valorinicial = (int) 0;
$valorFinal = (int) 0;
$pares = (string) null;
$impares = (string) null;

//validação para saber se o botão foi clicado pelo usuario
if(isset($_POST['btncalc'])){

    // recebendo dados so HTML do formulário
    $valorInicial = $_POST['sltNumeroInicial'];
    $valorFinal = $_POST['sltNumeroFinal'];

    $pares = numerosPares($valorInicial, $valorFinal);

    $impares = numerosImpares($valorInicial, $valorFinal);



}

?>
<html>
    <head>
        <title>Geração de Pares e Impares</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Pares e Impares
            </div>

            <div id="form">
                <form name="frmParImpar" method="post" action="">
						Valor Inicial:
                        <select name="sltNumeroInicial"> 
                           
                          <?=gerarNumeros(0, 200);?> 


                        </select>
                        <br>
						Valor Final:
                        <select name="sltNumeroFinal">

                        <?=gerarNumeros(0, 500);?> 

                        </select>
                        <br>
						<input type="submit" name="btncalc" value="Calcular">

						<div id="resultadoPar">
                            <?=$pares?>
						  
						</div>
						
						<div id="resultadoImpar">
						  <?=$impares?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>

