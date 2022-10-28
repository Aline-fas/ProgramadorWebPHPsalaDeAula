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
            //array indexado
        
            echo "Array <hr>";

            $lista = array(1,2,3.4,'Aline');
           // echo '<br>'. $lista;
            var_dump ($lista); //mostra os elementos
            echo "<br>";
            echo "<br>";
            print_r ($lista); //mostra os elementos
            echo "<br>";
            $lista [0]= 25; // mudei o que estava salvo no indice 0
            print_r ($lista);
            
            echo '<br>' . $lista[0]; //para acessar o elemento do array basta escrever a variavel e o indice dele
            echo '<br>' . ($lista[0]*10); //exemplo de multiplicação do array / tambem pode fazer sem ()
            
            $texto = 'Este é um texto';
            echo '<br>'. $texto;
            echo '<br>'. $texto[3]; // evitar pois da problema com caracteres latinos
            echo '<br>'. mb_substr($texto,14,1);//considera os caracteres latinos
            echo "<br>";
            echo "<br>";

            //array com mapa

            $dados = array (
                'idade' => 25,
                'cor' => 'verde',
                'peso' => 49.8,
            ); // ao inves do indice 0,1,2... definimos nomes/valores textuais para os indices
            
            print_r($dados);
            echo '<br>' .$dados['peso'];// dessa forma acessamos o dado desejado
            echo '<br>';
            var_dump($dados['cor']); // ou assim para acessar com mais detalhes
            $dados['altura']=1.65; //add elemento
            $dados[] = 145;
            echo '<br>';
            print_r($dados);


        ?>   
    </div>
</body>
</html>