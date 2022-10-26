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
            echo pi();
            $pi= '3.14';
            echo "<br>$pi";
            // var_dump($pi==pi());
            if (pi()-$pi<0.01){
                echo "<br>Iguais!";
            }else{
                echo "<br>Diferentes!";
            }
            

        ?>   
    </div>
</body>
</html>