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
            echo 'Desafio Meses';
            //O desafio proposto é realocar o índice 1 para que cada Índice corresponda ao mês que estamos acostumados
            echo '<br>';
            echo '<br>';

            $meses = array('Janeiro','Fevereiro',
            'Março','Abril','Maio','Junho','Julho',
            'Agosto','Setembro','Outubro','Novembro',
            'Dezembro');
            
            print_r ($meses);
            print_r($meses[5]);

            //a solicao é 1=> para que o indice comece em 1 e assim por diante
            $meses = array(1=>'Janeiro','Fevereiro',
            'Março','Abril','Maio','Junho','Julho',
            'Agosto','Setembro','Outubro','Novembro',
            'Dezembro');
            
            print_r ($meses);
            print_r($meses[5]);
        ?>   
    </div>
</body>
</html>