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
        echo "FOREACH<br><br>";
        
        $array = [1=>'Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sabado'];
        
        print_r($array);
        
        echo "<hr>";

        foreach ($array as $dia){ // variavel array recebe um novo nome 
            echo "$dia ";
        }
        echo '<hr>';
        
        //percorrendo a chave array
        foreach ($array as $indice => $dia){
            echo "$indice=>$dia <br>"; // desse modo ele mostra a chave (parecido com print_r)
        }
        echo '<hr>';

        $matrix =[
            ['a','e','i','o','u'],
            ['b','c','d']
        ];
        print_r($matrix);
        echo '<hr>';

        foreach ($matrix as $linha){
            foreach ($linha as $letra){
                echo " $letra ";
            }
            echo "<br>";
        }
        echo "<hr>";

        $numeros = [1=>1,2,3,4,5];
        print_r($numeros);

        echo "<hr>";
        foreach ($numeros as &$dobrar){ //feito passagem por referencia  (tambem pode fazer a passagem por valor)
            $dobrar *=2; // recebe a variavel e multiplica por 2
            echo "$dobrar ";
        }

        echo "<hr>";

        print_r($numeros);
        
        ?>
    </div>
</body>
</html>