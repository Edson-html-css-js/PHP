<?php  

/********************************************************************
 * Objetivo: arquivo de funcoes para o projeto
 * data: 06/10/2021
 * autor: edson

*/
//Retorna os numeros para um list no HTML
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

//Retorna uma sequencia de numeros pares
function numerosPares ($numeroInial, $numeroFinal) {

        $valorInicial = (int) $numeroInial;
        $valorFinal = (int) $numeroFinal;
        $resultadoPar = (string) null;

        for($cont = $valorInicial; $cont <= $valorFinal; $cont++){
            //verifica se o numero ($cont) é um numro par
            if($cont%2 ==0)
            // $resultadoPar = $resultadoPar . $cont . "<br>";

        }
        return $resultadoPar;
}
// trabalhando com vetores ou matrizes (array)
// 


//Retorna uma sequencia de numeros impares
function numerosImpares ($numeroInial, $numeroFinal) {

    $valorInicial = (int) $numeroInial;
    $valorFinal = (int) $numeroFinal;
    $resultadoimpar = (string) null;

    for($cont = $valorInicial; $cont <= $valorFinal; $cont++){
        //verifica se o numero ($cont) é um numro impar
        if($cont%2 != 0)
        $resultadoimpar = $resultadoimpar . $cont . "<br>";
    }
    return $resultadoimpar;
}


?>