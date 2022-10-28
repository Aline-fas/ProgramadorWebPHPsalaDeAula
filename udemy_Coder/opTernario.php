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
        
            echo "Operador Ternário";

        //If Else
            $idade = 65;
            $status;

            if ($idade>=18 &&$idade<65){
                $status ='Maior de idade';
            } elseif($idade>=65){
                $status = 'idoso';
            }else{
                $status = 'Menor de idade';
            }
            echo "<br>".$status;
           //Ternario

            $status = $idade>=18?"Maior de idade":"Menor de idade";
            echo "<br>".$status;
        ?>   
    </div>
</body>
</html>