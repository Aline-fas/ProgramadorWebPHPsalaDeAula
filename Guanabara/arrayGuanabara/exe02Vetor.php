<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Document</title>
</head>
<body>
    <div> 
        <pre>
            
            <?php
                $n = array (3,5,7,1);
                $n[]=4; //adiciona um elemento
                
                array_push($n,15); //adiciona um elemento no final do vetor 
                array_unshift($n,2); //adicionar elemento no inicio do vetor
                array_pop ($n); // excluir o ultimo elemento do vetor
                array_shift($n); //exclui o primeiro elemento do vetor
                
                sort($n); //organiza os vetores do menor para o maior (ordem crescente, numerica, alfabetica..)
                rsort($n); //organiza os vetores em ordem decrescente (do maior para o menor)
                print_r($n);
                
                //ou pode escrever como na linha abaixo
                
                $n = array (0=>3.5,2=>5,3=>"B");
                $tot = count($n);
                
                var_dump($n); // mostra o tipo (inteiro, string, float...), a quantidade de elementos
                
                
                echo " O vetor tem " . count($n). " elementos"; // mostra apenas a quantidade de elementos dentro do vetor 
                
            ?>
        </pre>
            
    </div>
</body>
</html>