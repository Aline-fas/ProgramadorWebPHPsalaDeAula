<?php

$hostname = "localhost";
$banco_de_dados = "projeto";
$usuario = "root";
$senha = "";
// $banco_de_dados = "id19904056_projetobd";
// $usuario = "id19904056_desenvolvedor";
// $senha = "b!!(=S-l1ylO/h*~";

$conexao = new mysqli($hostname, $usuario, $senha, $banco_de_dados);
if($conexao->connect_errno){ // error + number = errno
    echo "Falha ao conectar: (" . $conexao->connect_errno .")" . $conexao->connect_error;
} else {
    // echo "Conectado ao Banco.<br>";
} 