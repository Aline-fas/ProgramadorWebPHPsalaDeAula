<?php

$hostname = "localhost";
$banco_de_dados = "banco_php";
$usuario = "root";
$senha = "";

// mysqli(hostname, usuario, senha, banco);

$conexao = new mysqli($hostname, $usuario , $senha, $banco_de_dados);
if($conexao->connect_errno){
    echo "Falha ao conectar:(". $conexao->connect_errno . ")". $conexao->connect_error;
} else {
    // echo "Conectado ao Banco.<br>";
}