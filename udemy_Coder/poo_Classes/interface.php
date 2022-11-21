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
        
        <h3>Interface</h3>
            <?php

        //Uma classe pode implementar múltiplas interfaces
        //uma interface nao pode ter atrubutos dentro da funcao
        //uma interface pode implementar/extender outra interfaces
            interface Animal {
                function respirar();
            }
            interface Mamifero extends Animal {
                function mamar();
            }
            // interface Canino{
            interface Canino extends Mamifero{
                function latir();
            }

            // class Cachorro implements Animal, Canino{
            class Cachorro implements Canino{
                function respirar(){
                    return 'Respira oxigênio<br>';
                }
                function latir(){
                    return 'au au ';
                }
                function mamar(){
                    return 'Mama';
                }
            }

            $dog = new Cachorro;
            echo $dog->mamar();
            echo $dog->respirar();
            echo $dog->latir();

            echo '<br>Fim!'; 
 
            ?>
            
    </div>
</body>
</html>