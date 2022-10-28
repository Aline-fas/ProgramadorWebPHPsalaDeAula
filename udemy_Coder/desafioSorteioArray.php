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
            echo 'Sorteio';
            echo "<br> <h3>Elza, Rapunzel, Branca de neve e Cinderela</h3>";

            $nomes = ['Elza','Rapunzel', 'Branca de neve', 'Cinderela'];
            // print_r($nomes);

            $sorteio = array_rand($nomes);

            echo "<br> <h1> $nomes[$sorteio]</h1>";

        

            
        ?>   
    </div>
</body>
</html>