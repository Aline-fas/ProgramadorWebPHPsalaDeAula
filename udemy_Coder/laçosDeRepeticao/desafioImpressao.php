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
        <?php
            echo "Desafio Impressão (FOR E FOREACH) <hr>";
            //Imprima apenas os valores do array que contém índice par
            //Valores esperados AAA, CCC, EEE
            $array = [
                'AAA',
                'BBB',
                'CCC',
                'DDD',
                'EEE',
                'FFF'
            ];

            foreach ($array as $valor => $i){
                if ($valor % 2===0){ //PAR 
                    echo "$i  ";
                    $i++;
                }
            }
            echo "<hr>";

            //OU RESOLVE DA MANEIRA ABAIXO

            foreach ($array as $valor => $i){
                if ($valor % 2!==0){ //IMPAR
                    continue;
                    $i++;
                }
                echo "$i ";
            }
            echo "<hr>";



            for ($i=0;$i<count($array);$i++){
            
                if ($i%2===0){// se o mod for par, exibe...
                    echo "{$array[$i]} ";
                }
            }

            // OU RESOLVE DA FORMA ABAIXO

            echo "<hr>";
            for ($i=0;$i<count($array);$i++){
            
                if ($i%2===1){
                    continue; // nao exibe o indice impar e segue para o prox
                }
                 echo "{$array[$i]} ";
            }
        ?>
    </div>
</body>
</html>