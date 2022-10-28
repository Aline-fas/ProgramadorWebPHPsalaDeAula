<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
    
</head>
<body>
    <div>
        <?php  
            echo 'Operações com Array';

            $dados1 = ['nome'=>'José','idade'=>28];
            
            $dados2 = ['naturalidade'=>'Fortaleza'];

            $dadosCompletos = $dados1 + $dados2; //somando os dados das duas arrays anteriores

            print_r($dadosCompletos);
            $dados3=['maça','morango'];
            echo '<br>';
            print_r($dados3);

            echo '<br>' . is_array($dadosCompletos); // mostra se a variavel é um array ou nao
            echo '<br>' .count($dadosCompletos); // mostra a quantidade de elementos dentro do array
            echo '<br>';
            $indice = array_rand($dadosCompletos); //mostra um numero/indice aleatorio 
            echo "$indice = $dadosCompletos[$indice]" ;
            echo '<br>';

            $contagem = array_rand($dados3);
            echo "$contagem = $dados3[$contagem]";

            
            echo "<br> {$dadosCompletos['idade']}"; // exibindo o elementro de dentro do indice

            unset($dadosCompletos['nome']); //excluindo o indice 0
            echo '<br>';
            print_r($dadosCompletos);
            unset($dadosCompletos); // excluiu a variavel $dadosCompletos
            // var_dump($dadosCompletos);

            echo '<br>';
            echo '<br>';
            
            $pares = [0,2,4,6,8];
            $impar = [1,3,5,7,9];
            $decimais = $pares + $impar;
            
            print_r($decimais);
            
            $decimais = array_merge($pares, $impar); // faz uma uniao dos elementos de 2 arrrays
            echo '<br>';
            echo '<br>';
            print_r($decimais);
            
            echo '<br>';
            echo '<br>';
            sort($decimais); //ordenou os arrays em forma crescente
            print_r($decimais);
            
            
        ?>   
    </div>
</body>
</html>