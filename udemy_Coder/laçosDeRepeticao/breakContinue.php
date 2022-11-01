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
        echo "BREAK e CONTINUE<br><br>";
        
        $cont = 10;

        for (;;){
            
            echo "$cont  ";
            $cont++;
            if ($cont>20){
                break;
            }
        }

        echo "<br><hr>";

        for (;;){
            $cont++;
            if($cont%2===1){
                continue;
                // $cont++;
            }
            echo "$cont  ";
            if($cont>=40){
                break;
            }
        }
        echo "<br><hr>";

        foreach (array(1,2,3,4,5,6,7) as $valor){
            if ($valor ===5){
                break;
            } if ($valor % 2 ===0){
                continue;
            } 
            echo "$valor  "; 
        }
        ?>
    </div>
</body>
</html>