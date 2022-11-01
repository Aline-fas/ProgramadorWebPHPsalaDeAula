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
        echo "DESAFIO TABELA<br><hr>";
        
        $matriz = [
            ['01','02','03','04','05'],
            ['06','07','08','09','10'],
            ['11','12','13','14','15'],
            ['16','17','18','19','20'],
        ];
        // print_r($array[3]);

        foreach($matriz as $linha){
            foreach ($linha as $valor){
                
                echo "$valor  ";
            }
            echo "<br>";
        }
        ?>
    </div>
</body>
</html>