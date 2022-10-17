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
            echo "<h2>Rotinas com Parâmetros Dinâmicos</h2>";
            
            function soma(){
                $p = func_get_args (); //Essa função pega todos os elementos e coloca dentro do vetor
                $t = func_num_args(); // retorna o numero de elementos dentro do vetor
                $s = 0;
                
                for($i=0; $i<$t; $i++){
                    $s += $p[$i];
                }
                return $s;
            }
            
            $resultado = soma (3,5,2,9);
            echo " A soma dos valores é $resultado";
        
        
                ?>
        </pre>
    </div>
</body>
</html>