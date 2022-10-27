<?php

//desafio implementar a validação do CPF
function verifica_cpf($cpf){
    $cpf = str_replace(".","",$cpf);
    $cpf = str_replace("-","",$cpf);
    $cpf_v = str_split($cpf);
    return $cpf;
}
