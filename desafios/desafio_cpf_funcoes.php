<?php

//desafio implementar a validação do CPF
function verifica_cpf($cpf){

    $cpf = str_replace(".","",$cpf);
    $cpf = str_replace("-","",$cpf);
    $cpf_vetor = str_split($cpf);

    // var_dump ($cpf_vetor);
    print_r($cpf_vetor);
    
    echo '<br>';    
    echo '<br>';
    $md = 10;
    $qtd = 9; //t

    for ($t= 9; $t < 11; $t++){

        for ($d = 0, $c = 0; $c < $t; $c++){ 
            $d += $cpf_vetor [$c] * (($t + 1)-$c);
            // $multi =  $cpf_vetor[$c] *$md;
            // $md--;
            // echo " $multi "; 
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf_vetor[$c] != $d ) {
            return false;
        }
    } 
    return true;
}

