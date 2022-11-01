<?php

//desafio implementar a validação do CPF
function verifica_cpf($cpf){

    $cpf = str_replace(".","",$cpf);
    $cpf = str_replace("-","",$cpf);
    $cpf_vetor = str_split($cpf);

    // var_dump ($cpf_vetor);
    print_r($cpf_vetor);
    
    echo '<br>';
    $md = 10;
    $mt = 11;
     

    for ($multi = 0, $c = 0; $c < 9; $c++){ 
        $multi +=  $cpf_vetor[$c] * $md;
        $md--;
    }
    // echo " $multi "; 
    $multi = $multi % 11;//modulo (9)
    // echo " <br> $multi "; 
    $dVerificador = 11 - $multi; 
    if ($dVerificador > 9){
                $dVerificador = 0;
            }
        echo " $dVerificador ";

            for ($a = 0, $c = 0; $c < 10; $c++){
                $a += $cpf_vetor[$c] * $mt;
                $mt--;
            } 
            // echo " $a ";
            $a = $a % 11; //modulo (0)
            // echo "$a <br>";
            $dVerificador2 = 11 - $a; //11
            if ($dVerificador2 > 9){
                $dVerificador2 = 0;
            }
            echo " $dVerificador2 ";
            $d =10;
            
            return true;
        }
        
        // for ($t= 9; $t < 11; $t++){ // duas passadas
    
        //     for ($d = 0, $c = 0; $c < $t; $c++){ 
        //         $d += $cpf_vetor [$c] * ($t + 1 - $c);
        //         echo " $d ";
        //     }
        //     
        //     $d = ((10 * $d) % 11) % 10;
        //     if ($cpf_vetor[$c] != $d ) {
        //         return false;
        //     }
        // } 
        // return true;
        
        