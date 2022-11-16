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

            function somaCompleta(...$numeros){
                // print_r($numeros);
                $soma = 0;
                foreach ($numeros as $num) {
                    $soma += $num;
                }
                return $soma;
            }

            echo somaCompleta(2,5,7,1);
            $array = [6,7,8];
            echo "<br>";
            echo somaCompleta(...$array);
            echo "<hr>";

            function planoDeSaude($titular, ...$dependentes){
                echo "Titular: $titular <br>";
                if ($dependentes) {
                    foreach ($dependentes as $dep){
                        echo "Dependente: $dep <br>";
                    }
                }
            }

            echo "<br>";
            
            planoDeSaude('Roberto','Julia','Ana');
            planoDeSaude('Pedro');
            echo "<hr>";
            
            function saudacao ($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
                echo "Bem-vindo(a), $nome $sobrenome!";
            }
            saudacao('Lucas', 'Amaro');
            echo "<hr>";

            function anotarPedido($comer,$beber='Água'){
                echo "Para comer: $comer<br>";
                echo "Para beber: $beber<br>";
            }

            anotarPedido('Pizza');

            function pulaLinha($a){
                $p = 0;
                do {
                    echo "<br>";
                    $p++;
                    
                }while ($p < $a);
            }

            pulaLinha(2);
            echo"Pulei linhas com função";
        ?>   
    </div>
</body>
</html>