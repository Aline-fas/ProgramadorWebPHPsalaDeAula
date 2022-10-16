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

                //ARRAY
                $n = array (3,5,8,2);
                $n[]=44;
                print_r($n); // print_r() é usado para mostrar um vetor na tela durante os testes
                
                // ao inves de usar "ARRAY", pode usar a palavra "RANGE"
                
                //sintaxe de RANGE:
                
                //(1° posição, ultima posição, tamanho do passo)
                $c = range(5,20,2);
                print_r ($c); // foreach aqui é melhor

                //FOREACH (mostrar o vetor)
                //"para cada elemento de x tratado como y, mostre y na tela"
                echo "FOREACH <br> <br>";
                foreach ($c as $valor) { //essa estrutura ao inves do print_r
                    echo " $valor  ";
                }

                //forcando em qual caixa o meu elemento vai ficar

                $v = array (1 =>"A", 3 =>"B", 6=>"C", 8 =>"D");
                $v []= 5; //[indice]
                print_r($v);
                unset ($v[3]); //apagar um vetor especifico
                print_r($v);

                //criando array recebendo strings nas caixas ao inves de numero

                $cad = array ("nome" => "Ana", "idade"=> 18, "peso"=> 65.5);
                print_r ($cad); 
                
                // criando uma variavel para exibir a caixa e o conteudo
                foreach ($cad as $k => $e){
                    echo "O campo $k possui o conteudo $e <br>";
                }
                echo "<br>";

                // MATRIZES EM PHP / vetores dentro de vetores

                $m = array(array(6,4),
                array(4,9),
                array(3,2));
                $m [1][1]= $m [2][0];// pegou o elemento da caixa 2,0 e copiou pra caixa 1,1
                print_r ($m);
            ?>
        </pre>
            
    </div>
</body>
</html>