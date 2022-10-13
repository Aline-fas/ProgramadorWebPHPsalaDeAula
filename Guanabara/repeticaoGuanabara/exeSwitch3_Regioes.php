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
        <p>
            Clique em um Estado brasileiro e veja a região onde ele se encontra.
        </p>
        <?php
            $estado = $_POST["estados"];
           

            
            switch ($estado) {
                
                case "norte": 
                    $regiao = "norte";
                    break;
                case "nordeste":
                    $regiao = "nordeste";
                    break;
                case "sudeste":
                    $regiao = "sudeste";
                    break;
                case "centro-oeste":
                    $regiao = "centro-oeste";
                    break;
                case "sul":
                    $regiao = "sul";
                    break;
                default:
                echo "Inválido";
            }

                echo "Você mora na região $regiao.";
               
        ?>
        <br>
        <br>
    <a href="exeSwitch3_Regioes.html">Voltar</a>
    </div>
</body>
</html>