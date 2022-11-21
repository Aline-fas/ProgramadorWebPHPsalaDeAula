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
        <h3>Membros Estáticos</h3>
        <?php

            class A {
                public $naoStatic = 'Variável de objeto  (Instância)';
                public static $static = 'Variave de classe (estática)';
            
                public function mostrarA(){
                    echo "Não estático: {$this->naoStatic}<br>";
                    echo "Estático: ". self::$static ."<br>"; //assim que mostra o objeto estatico
                }

                public static function mostrarStaticA(){
                    // echo "Não estática = {$this->naoStatic}<br>"; 
                    // dentro de uma função estatica só da pra acessar membros estaticos. 
                    //this nao funciona e nao da pra acessar obj, apenas classe.
                    echo "Estática: " . self::$static ."<br>";
                }
            }
            
            //acessando objeto
            $objetoA= new A();
            $objetoA->mostrarA(); 
            //$objetoA->mostrarStaticA();//nao usar
            //acessando classe
            A::mostrarStaticA(); //assim que se deve exibir membros de classes
            echo A::$static . "<br>";

            A::$static = "Novo conteúdo";
            echo A::$static;

            
            ?>
    </div>
</body>
</html>