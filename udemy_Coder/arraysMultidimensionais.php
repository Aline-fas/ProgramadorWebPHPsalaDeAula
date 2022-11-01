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
        echo "Array dentro de array / Array Multidimensionais <br>";
            $dados = [
                [
                'nome' => 'Vivi',
                'idade' => '10',
                'naturalidade' => 'Rio de Janeiro'
                ],
                [
                    'nome' => 'Aline',
                    'idade'=> 23,
                    'naturalidade' => 'Rio de Janeiro'
                ],
            ];
            $dados []= [
                'nome' => 'Putucha',
                'idade'=> 13,
                'naturalidade' => 'Rio de Janeiro'
            ];
            $dados[0]['peso'] = '3kg';//adicionando uma chave dentro do array0
            echo "<br>";
            unset($dados[1]); // excluindo o indice 1
            print_r($dados);
            echo "<br>";
            echo "<br>";
            print_r($dados[2]); //acessando o indice 2
            echo $dados[2]['idade']; //acessando a chave idade no indice 0

            echo "<br>";
            echo "<br>CONSTANTES"; // NAO É POSSIVEL ALTERAR OU ADICIONAR ELEMENTOS NAS CONSTANTES
            echo "<br>";
            const FRUTAS = array('laranja','morango');
            print_r(FRUTAS); 
            echo "<BR>" . FRUTAS[0];//acessa uma chave especifica
            const CARROS = ['fiat'=>'uno', 'ford'=>'fiesta'];
            echo "<br>";
            print_r(CARROS);
            echo "<br>" . CARROS['fiat'];

        ?>   
    </div>
</body>
</html>