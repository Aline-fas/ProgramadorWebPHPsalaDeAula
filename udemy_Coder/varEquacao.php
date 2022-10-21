<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Equação com variáveis</title>
</head>
<body>
    <div>
        <?php
            echo "<h4>Desafio equação</h4><br>";

            $numA = (6*(3+2))**2;
            $denA = 3*2;
            $numB = (1-5)*(2-7) ;
            $denB = 2;
            $superiorA = $numA / $denA;
            $superiorB = ($numB / $denB) ** 2;
            $superior = ($superiorA - $superiorB) **3;
            $total = $superior / (10**3);

            echo "O resulltado final é " . $total . "<br>";

            
            
        ?>
    </div>
</body>
</html>