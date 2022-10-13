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
            $n1 = $_POST["numero1"];
            $n2 = $_POST["numero2"];
            $op = $_POST["operacao"];
            
            switch ($op) {
                case 1:
                    $resultado = $n1 + $n2;
                    // echo " O resultado de ".$n1. " + ".$n2." é ".$resultado.".";
                    echo "Resultado: $n1 + $n2 = $resultado";
                    break;
                case 2: 
                    $resultado = $n1 - $n2;
                    echo "Resultado: $n1 - $n2 = $resultado";
                    break;
                case 3: 
                    $resultado = $n1 * $n2;
                    echo "Resultado: $n1 x $n2 = $resultado";
                    break;
                case 4: 
                    $resultado = $n1 / $n2; 
                    $resultado = number_format ($resultado,3,".","");
                    echo "Resultado: $n1 / $n2 = $resultado";
                    break;
            
        }
        // echo " O resultado da operação é: $resultado.";
        ?>
        <br>
        <a href="exeSwitch_Operação2.html">Voltar</a>
    </div>
    
</body>
</html>

