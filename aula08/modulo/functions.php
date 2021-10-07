<?php  

/********************************************************************
 * objetivo: arquivo de funcoes para o projeto
 * data: 06/10/2021
 * autor: edson

*/
//retorna os numeros para um list no HTML
function gerarNumeros($numeroInial, $numeroFinal) {

    $cont = (int) 0;
    $valorfinal = (int)  $numeroFinal;
    $resultado = (string) null;

    while($cont <= 200){

        $resultado = $resultado . "<option value='$cont'>$cont</option>";
        $cont = $cont +1;

    }
    return $resultado;

   

}




?>