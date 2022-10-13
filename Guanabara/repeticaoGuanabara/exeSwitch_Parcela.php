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
            $total = $_POST["valor"];
            $pagamento = $_POST["pagamento"];

            switch ($pagamento){
                case "aVista": 
                $total = $total *0.90;
                echo " Você recebeu um desconto de 10%. O valor total da sua compra é de R$ $total.";
                break;
                default:
                echo "O valor total da sua compra é de R$ $total.";
            }

        ?>
        <br>
        <a href="exeSwitch_Parcela.html">Voltar</a>
    </div>
    
</body>
</html>

