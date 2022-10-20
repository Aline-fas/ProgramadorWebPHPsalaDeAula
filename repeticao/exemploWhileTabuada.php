<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>
    <div>
        <?php
        // $n = $_GET["valor"];
        // $c = 1;

        // do {
        //     $resultado = ($n * $c);
        //     echo $n . " x " . $c . " = ". $resultado. "<br>";
        //     $c++;

        // }while($c <= 10);

        $n = $_GET["valor"];
        
        //Multiplicação 
        
        for ($c=1;$c<=10;$c++){
            $resultado = ($n * $c);
            echo $n ." x " .$c." = ".$resultado. "<br>";
        }

        //Divisao
        // for ($c=1;$c<=10;$c++){
        //     $resultado = ($n / $c);
        //     echo $n ." / " .$c." = ".$resultado. "<br>";
        // }
        ?>
        <a href="exemploWhileTabuada.html">Voltar</a>
    </div>
</body>
</html>