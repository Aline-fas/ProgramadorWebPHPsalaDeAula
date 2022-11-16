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
        <h3>Public, protected e private</h3>
        <?php

            class A {
                public $publico = 'Público';
                protected $protegido = 'Protegido';
                private $privado = 'Privado';

                public function mostrarA(){
                    echo "Class A) Público = {$this->publico}<br>";
                    echo "Class A) Protegido = {$this->protegido}<br>";
                    echo "Class A) Privado = {$this->privado}<br>";
                }

                private function naoMostrar(){
                    echo "Não vou imprimir se for chamado fora da classe. Só se for chamado aqui dentro!";
                }
                protected function vaiPorHeranca(){
                    echo "Serei transmitido por herança!";
                }
            }            

            $a = new A;
            $a->mostrarA();

            class B extends A{

                public function mostrarB(){
                    echo "Class B) Público = {$this->publico}<br>";
                    echo "Class B) Protegido = {$this->protegido}<br>"; // protegido é transmitido por herança
                    //echo "Class B) Privado = {$this->privado}<br>"; // privado só é exibido na classe em que ele foi definido
                    parent::vaiPorHeranca(); // só pode ser acessado dentro da classe
                }
            }

            echo '<br>';
            $b = new B();
            $b->mostrarB();
            
            echo '<br>';
            echo '<br>';
            $b->mostrarA();
            ?>
    </div>
</body>
</html>