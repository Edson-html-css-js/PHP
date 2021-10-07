<?php 
//Inport do arquivo de funcoes do projeto
require_once('modulo/functions.php');

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
						  
						</div>
						
						<div id="resultadoImpar">
						  
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>

