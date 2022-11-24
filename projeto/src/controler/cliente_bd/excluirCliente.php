<?php

require_once "../../protect.php";
require_once "../../conexao.php";

if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador") {
    $idCliente = isset($_GET['id']) ? $_GET['id'] : 0;

    if($idCliente > 0){

        $sql = "DELETE FROM cliente WHERE idcliente = '$idCliente'";
        $sql_query = $conexao->query($sql);

        header("Location: ../../../clientes.php");
    }else {
        
        header("Location: ../../../index.php");
    }
}else {
    
    header("Location: ../../../nao_permitido.php");
}







