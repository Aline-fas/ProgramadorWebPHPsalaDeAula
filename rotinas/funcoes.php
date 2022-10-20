<?php

// Procedimentos

//Informar o local do projeto
echo date_default_timezone_get();
echo "<br>";
date_default_timezone_set("America/Sao_Paulo");
echo date_default_timezone_get();
echo "<br>";

function escreva_texto(){
echo "<h4 style='text-align: center;'>Minha primeira função em PHP</h4>";
}

function escreva_texto2($qualquer_coisa){
echo "<h4 style='text-align: center;'>$qualquer_coisa</h4>";
}

function hoje(){
$agora = date('d/m/Y H:i');
echo "<h4 style='text-align: center;'>$agora</h4>";
}

function pulaLinha($numero){
    // if($numero < 1){
    //     echo "-<br>";
    // } else {
    //    for($i=1; $i <= $numero; $i++){
    //     echo ".<br>";
    //    }
    // }
        do{
            echo "<br>";
            $numero--;
        }while($numero >= 1);
        
}

function soma($num1, $num2){
    $total = $num1 + $num2;
    echo "<h4 style='text-align: center;'>A soma de $num1 + $num2 = $total </h4>";
    pulaLinha(0);
}

function soma2(){
    $valores = func_get_args();//Pega os argumentos e devolve um array;
    $qtd1 = count($valores); //4
    echo "Quantidade 1 = " . count($valores);
    $qtd2 = func_num_args();//Retorna um inteiro que representa a quantidade de argumentos;
    $total = 0;
    echo "<h4 style='text-align: center;'>A soma: ";
    for($i =0; $i <  $qtd1; $i++){
        $total += $valores[$i];// $total = $total + $i 
        echo $valores[$i] . ( $i == $qtd1 -1 ? " = " : " + ") ;
    }
//    echo "<h4 style='text-align: center;'>A soma é = $total </h4>";
    echo $total .";</h4>";
    pulaLinha(0);
    //15 + 78 + 55 + 1 = total
}

function subtracao($num1, $num2){
    $total = $num1 - $num2;
    echo "<h4 style='text-align: center;'>A subtração de $num1 - $num2 = $total </h4>";
    pulaLinha(0);
}

function multiplicacao($num1, $num2){
    $total = $num1 * $num2;
    echo "<h4 style='text-align: center;'>A multiplicação de $num1 * $num2 = $total </h4>";
    pulaLinha(0);
}

function divisao($num1, $num2){
    if($num2 == 0){
        echo "<h4 style='text-align: center;'>Não é  possível dividir por zero...</h4>";
    } else {
        $total = $num1 / $num2;
        echo "<h4 style='text-align: center;'>A divisão de $num1 / $num2 = $total </h4>";
    }
    pulaLinha(0);
}

