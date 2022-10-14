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
            $c = $_GET["numero"];

            for ($i=$c; $i<=15; $i++) {
                echo "$i ";
            }
            echo "<br>";
            for ($i=$c; $i>=0; $i--){
                echo "$i ";
            }
            echo "<br>";
            for ($i=$c; $i<=100;$i+=10){
                echo $i." ";
            }
            echo "<br><br>";
            
            for($i=1;$i<=10;$i++){
                $r = $i * $c;
                echo "$c x $i = $r<br>";
            }
        ?>
    </div>
</body>
</html>