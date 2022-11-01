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
        echo "Desafio Laço FOR<br><br>";
        $has = '';
        for ($h=0;$h<5;$h++){
            $has .= '#';
            echo " $has <br> ";
        }
        echo "<hr>";
        
        for ($h='#';$h!=='######';$h.='#'){
            
            echo " $h <br> ";
        }
        ?>
    </div>
</body>
</html>