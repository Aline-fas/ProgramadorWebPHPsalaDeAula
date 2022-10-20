<?php
//Funções em PHP

function escreva_texto3($qualquer_coisa){
    return $qualquer_coisa;
 }

 function somaR($num1, $num2){//Passagem por valor
     $total = $num1 + $num2;
     $num2 = 10;
    return $total;
}
 function somaR2(&$num1, &$num2){//Passagem por referência
     $total = $num1 + $num2;
     $num2 = 10;
    return $total;
}

function soma2R(){
    $valores = func_get_args();//Pega os argumentos e devolve um array;
    $qtd1 = count($valores); 
    $qtd2 = func_num_args();//Retorna um inteiro que representa a quantidade de argumentos;
    $total = 0;
    for($i =0; $i <  $qtd1; $i++){
        $total += $valores[$i];
    }
//    echo "<h4 style='text-align: center;'>A soma é = $total </h4>";
    return $total;
    
}

function subtracaoR($num1, $num2){
    // $total = $num1 - $num2;
    return $num1 - $num2;
    
}

function multiplicacaoR($num1, $num2){
    $total = $num1 * $num2;
    return $total;
}

function divisaoR($num1, $num2){
    if($num2 == 0){
        $resultado = "<h4 style='text-align: center;'>Não é  possível dividir por zero...</h4>";
    } else {
        $resultado = $num1 / $num2;
    }
    return $resultado;
    pulaLinha(0);
}
