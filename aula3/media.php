<?php


//comentário em linha
#comentário em linha
/*
    comentário
        em 
    bloco
*/ 

//isset() - permite verificar se existe uma variavel, um objeto ou etc...

        //Para escrever um conteudo na tela podemos utilizar:
        //echo($nota2);
        //print($nota4);
        //print_r($nota3);
        //Calcular o valor da média   

//Operadores de comparação no PHP
    /*
        < menor
        > maior
        <= menor ou igual
        >= maior ou igual
        == Comparação de conteudo
        != diferente
        === Comparação de conteudo e validação de tipo de dados
            Ex: x=4 y="10"
            if(x == y) "verdadeiro"
            if(x === y) "falso"
        !== Valida a diferença de conteudos e valida o tipo de dados
    

    Operadores Lógicos

                PHP
        E   AND  &&
        OU  OR   || 
        Não NOT  !

    */

//Declarando a variavel media com o tipo de dados real
$media = (float) 0;
$nota1 = (float) 0;
$nota2 = (string) null;
$nota3 = (string) null;
$nota4 = (string) null;

//Valida se o botão calcula já foi clicado
if(isset($_GET['btncalc']))
{
    //Recebendo dados das caixas de texto do HTML
    //$_GET - permite pegar os valorese digitados na URL da página (method=GET)
    $nota1 = $_GET['txtn1'];
    $nota2 = $_GET['txtn2'];
    $nota3 = $_GET['txtn3'];
    $nota4 = $_GET['txtn4'];

    //Validação para testar caixas vazias
    if($nota1 == '' || $nota2 == '' || $nota3 == '' || $nota4 == '')
    {
        echo('<script>alert("Não foi possível calcular, pois existem caixas vazias!");</script>');
    }else
    {
        //Validação para entrada de valores apenas numericos
        if(is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4))
        {
            $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
        }else
        {
            echo ('<script>
                    alert("É necessário que todas as caixas tenham numeros válidos!");
                </script>');
        }
    }
}


?>

<html>
    <head>
        <title>Média</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculo de Médias
            </div>

            <div id="form">
                <form name="frmmedia" method="get" action="media.php">
                    Nota 1:<input type="text" name="txtn1" placeholder="<?=$nota1?>"> <br>
                    Nota 2:<input type="text" name="txtn2" value="<?=$nota2?>"> <br>
                    Nota 3:<input type="text" name="txtn3" value="<?=$nota3?>"> <br>
                    Nota 4:<input type="text" name="txtn4" value="<?=$nota4?>"> <br>
                    <input type="submit" name="btncalc" value ="Calcular" >
                </form>
            </div>
            <div id="resultado">
                <!-- Comentário -->
                A média é: <?=$media; ?>
            </div>
        </div>
        
		
	</body>

</html>