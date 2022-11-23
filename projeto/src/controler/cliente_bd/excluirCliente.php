<?php

require_once "../../protect.php";
require_once "../../conexao.php";

// $idCliente = 5;
$idCliente = filter_input(INPUT_POST, 'idcliente', FILTER_SANITIZE_NUMBER_INT);

// $idCliente = isset($_POST['idcliente']) ? $_POST['idcliente'] : 0;

$sql = "DELETE FROM cliente WHERE idcliente = '$idCliente'";
$sql_query = $conexao->query($sql);


if ($sql_query){
    // echo "Sucesso total";
    header("Location: ../../../clientes.php");
}else {
    // echo "Tente outra vez";
    header("Location: ../../../index.php");
}

// $conexao->close();



