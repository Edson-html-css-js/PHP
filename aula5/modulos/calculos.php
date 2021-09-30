<?php
     /*******************************
      * Odjetivo: Arquivo para reunir funções para calculos matematico 
      * Data de criação: 29/09/2121
      * Autor: Edson Lucas
      ********************************/ 

//Função para realizar as quatro operações matematicas
function operacoesMatematicas($numero1, $numero2, $operacao) {
   
   //declarando variaveis locais na função e recebendo os dados de parametros da função
  //global $valor1 = (float) $numero1; seu quiser que a variavel se torne global
    $valor1 = (float) $numero1;
    $valor2 = (float) $numero2;
    $opcao = (float) $operacao;

    $resultado = (float) 0;

    switch ($opcao) {

        case 'somar';//Valida a saida da variavel testada no switch
        $resultado = $valor1 + $valor2;
        break;
        case 'subtrair';
        $resultado = $valor1 - $valor2;
        break;
        case 'multiplicar';
        $resultado = $valor1 * $valor2;
        break;
        case 'dividir';
        $resultado = $valor1 / $valor2;
        break;

    }//switch

    return $resultado;

}


?>