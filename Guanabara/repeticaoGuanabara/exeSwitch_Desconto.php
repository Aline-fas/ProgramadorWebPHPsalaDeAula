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
            $total = $_POST["totalsd"];
            $desconto = $_POST["desconto"];
            
            switch ($desconto) {
                case 2:
                   $total = number_format($total *90/100,2,",",".");
                   echo "Você possui o desconto de Funcionário.O valor total da sua compra é de R$$total.";
                    break;
                
                case 3: 
                    $total = number_format($total *0.95, 2, ",",".");
                    echo "Você possui o desconto de cliente VIP.O valor total da sua compra é de R$ $total.";
                    
                default:
                    echo "Você já possui o melhor preço!";
                    break;
            }
           
        ?>
        <br>
        <a href="exeSwitch_Desconto.html">Voltar</a>
    </div>
    
</body>
</html>

