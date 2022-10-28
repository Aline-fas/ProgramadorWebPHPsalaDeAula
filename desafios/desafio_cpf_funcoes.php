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
    $mt = 11;
    $t = 9; 

    // for ($t= 9; $t < 11; $t++){ // duas passadas

    //     for ($d = 0, $c = 0; $c < $t; $c++){ 
    //         $d += $cpf_vetor [$c] * ($t + 1 - $c);
    //         // $multi =  $cpf_vetor[$c] *$md;
    //         // $md--;
    //         // echo " $multi "; 
    //         echo " $d ";
    //     }
    //     2160
    //     $d = ((10 * $d) % 11) % 10;
    //     if ($cpf_vetor[$c] != $d ) {
    //         return false;
    //     }
    // } 
    // return true;
    for ($multi=0, $c = 0; $c < $t; $c++){ 
            // $d += $cpf_vetor [$c] * ($t + 1 - $c);
                $multi +=  $cpf_vetor[$c] *$md;
                $md--;
            }
            echo " $multi "; 
            $multi = $multi % 11;
            $dVerificador = 11 - $multi; // primeiro digito verificador(4)
            // echo " <br> $multi "; 
    for ($a = 0, $c = 0; $c < 10; $c++){
            $a += $cpf_vetor[$c] * $mt;
            $mt--;
        } 
        echo " $a ";
        $a = $a % 11;
    $dVerificador2 = 11 - $a;
}
// 40 76 108 136 160 180 196 208 216
// 216 44 84 120 152 180 204 224 240 252 260
// 260

