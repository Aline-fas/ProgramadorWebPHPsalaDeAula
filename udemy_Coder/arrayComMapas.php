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

            $dados = array(
                "idade"=>25,
                "cor"=>"verde",
                "nome"=>"Carlos",
                "azul"
            );

            // var_dump($dados['nome']);
            print_r($dados[0]);

            echo "<hr>";

           $sorteio = array_rand($dados); // criando um sorteio

           echo "$sorteio = $dados[$sorteio]"; // exibindo uma chave do array aleatorio atravez de sorteio
           echo "<br> {$dados['idade']}<hr>";

           $pares = [0,2,4,6,8];
           $impares = [1,3,5,7,9];
           $decimais = $pares+$impares;
           print_r($decimais);// assim ele dara preferencia para o array da esquerda

           echo "<hr>";
           
           $decimais =  array_merge($pares,$impares); //assim ele une os dois arrays
           print_r($decimais);
           
           sort($decimais); // organizou em ordem crescente
           echo "<hr>";
           print_r($decimais);
           
           echo "<hr>";  // desafio exibir chave aleatoria
           $princesas = ['cinderela','ana','branca de neve','rapunzel'];
           $sortp = array_rand($princesas);
           print_r($sortp = $princesas[$sortp]);
           echo "<br> $sortp" ;
           
           echo "<hr>";
           
           const FRUTAS =['laranja','morango'];
           echo FRUTAS[0];
           echo "<hr>";
           define('CIDADES', array('belo horizonte','recife'));
           echo CIDADES[1];
           
           echo "<hr>";
           $array = [1=>'Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sabado'];
           
           for ($i=1; $i <= 7; $i++) { 
               
               echo " $array[$i]  ";
               
            }

            echo "<hr>";
            
            foreach ($array as $valor) {
                echo "$valor ";
            }
            echo "<br>";
            echo "<br>";
            foreach ($array as $indice => $valor) {
                echo "$indice => $valor <br>";
            }
            
            echo "<hr>";
            $numeros = [1,2,3,4,5];
            print_r($numeros);
            echo "<br>";

            foreach ($numeros as $dobrar) {
                $dobrar *=2;
                echo "$dobrar  ";
            }
            
            echo "<br>";
            print_r($numeros);
           
        ?>
    </div>
</body>
</html>