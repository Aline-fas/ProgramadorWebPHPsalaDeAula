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
        // $c = 1;

        // while ($c <=10) {
        //     echo $c. "<br>";
        //     $c++;
        // }

        echo "Contagem progressiva com Do <br>";
        $c = 1;
        
        do {
           echo $c . " ";
            $c++;

        } while ($c <= 20);

        echo "<br>Contagem regressiva<br>";
        $c = 20;
        
        do {
           echo $c . " ";
            $c--;

        } while ($c >= 1);
        
        echo "<br>Contagem pulando de 3 em 3 numeros<br>";
        $c = 20;
        
        do {
           echo " ".$c;
            $c-=3 ;

        } while ($c >= 1);

       
    ?>
    </div>
</body>
</html>