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
        echo "desafio<br>";

        $trabalho1 = 1;   
        $trabalho2 = 0;   
        if ($trabalho1 && $trabalho2){
            echo "Vamos ao shopping comprar nossa tv gigante";
        } elseif ($trabalho1 || $trabalho2) {
            echo "Vamos ao shopping comprar nossa tv menor";
        } else {
            echo "Vamos ficar em casa";
        }
        echo "desafio<br>";
        $trabalho1 = false;   
        $trabalho2 = false;   
        if ($trabalho1 && $trabalho2){
            echo "Vamos ao shopping comprar nossa tv gigante";
        } elseif ($trabalho1 || $trabalho2) {
            echo "Vamos ao shopping comprar nossa tv menor";
        } else {
            echo "Vamos ficar em casa";
        }
        ?>   
    </div>
</body>
</html>