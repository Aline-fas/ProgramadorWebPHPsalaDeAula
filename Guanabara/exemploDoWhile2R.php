<!DOCTYPE html>
<html lang="pt-BR">
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
        $v = isset($_GET["val"])?$_GET["val"]:1;
        
        echo "<h1> Calculando o fatoria de $v </h1>";
        $c = $v;
        $fat = 1;
        do {
        $fat = $fat * $c;
        $c--;

        } while ($c >=1);
        echo "$v! = $fat"
        ?>
    </div>
</body>
</html>
<!-- 
echo " <br> Script fatorial<br>";
        $v = 5;
        do {
            echo " " . $v;
            $v*=;
        }

    $i = 1;
  $num = isset($_GET["num"])?$_GET["num"]:1;
  
  do{
   echo $num ."x". $i ."=". ($num*$i) ."<br/>";
   $i++;
  }while($i<=10); -->