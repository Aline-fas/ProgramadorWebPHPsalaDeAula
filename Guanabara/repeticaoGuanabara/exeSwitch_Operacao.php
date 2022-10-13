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
        $n = isset ($_GET["numero"])? $_GET["numero"]:0;
        $o = isset ($_GET["operacao"]) ? $_GET["operacao"]:1;

        switch ($o) {
            case 1: 
            $resultado = $n * 2;
            break;
            case 2: 
            // $resultado = $n * $n * $n;
            $resultado = pow ($n,3);
            break;  
            case 3: 
            $resultado = sqrt ($n);
            // echo " A raiz quadrada de $n é $resultado.";
        }
        echo " O resultado da operação solicitada foi: $resultado";

        ?>
        <br>
        <a href="exeSwitch_Operação.html">Voltar</a>
    </div>
    
</body>
</html>

