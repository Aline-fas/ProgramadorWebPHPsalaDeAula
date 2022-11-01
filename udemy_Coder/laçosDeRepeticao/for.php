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
        echo "Laço FOR<br><br>";

        for($cont=1;$cont<= 5;$cont++){
            echo "$cont "; 
        }
        for(;$cont<= 10;$cont++){
            echo "$cont "; 
        }
        echo '<hr>';
        $array = [1=>'Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sabado'];
        print_r($array);
        
        echo '<hr>';
        
        for($i=1;$i<=count($array);$i++){
            echo "{$array[$i]}  "; // exibe cada elemento dentro do indice
            //echo "$array[$i] <br>"; // ou assim
        }
        // echo "$array[3]";
        echo '<hr>';

        $matrix =[
            ['a','e','i','o','u'],
            ['b','c','d']
        ];
        print_r($matrix);
        echo '<hr>';

        for ($i=0;$i<count($matrix);$i++){
            for($j= 0;$j < count($matrix[$i]);$j++){
                echo " {$matrix[$i][$j]} "; //acessando e percorrendo o elemento dentro da array
            }
            
            echo "<br>";
        }
        
        

        ?>
    </div>
</body>
</html>