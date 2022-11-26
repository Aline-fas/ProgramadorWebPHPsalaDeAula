<?php

require_once "../../protect.php";
require_once "../../conexao.php";

$idCliente = isset($_POST['idcliente']) ? $_POST['idcliente'] : 0;

if($idCliente > 0){
    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
    $dataNascimento = isset($_POST["nascimento"]) ? $_POST["nascimento"] : "";
    $orgao = isset($_POST["orgao"]) ? $_POST["orgao"] : "";
    $rg = isset($_POST["rg"]) ? $_POST["rg"] : "";
    $cpf = isset($_POST["cpf"]) ? $_POST["cpf"] : "";
    $estadoCivil = isset($_POST["estado_civil"]) ? $_POST["estado_civil"] : "";
    $sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $senha = isset($_POST["senha"]) ? password_hash($_POST["senha"], PASSWORD_DEFAULT) : "";
    $ativo = isset($_POST["ativo"]) ? $_POST["ativo"] : true;

    $sql_code = "UPDATE cliente SET nome = '$nome', data_nascimento = '$dataNascimento', orgao = '$orgao', rg = '$rg', cpf = '$cpf', estado_civil = '$estadoCivil', sexo = '$sexo', email = '$email', senha = '$senha' WHERE idcliente = $idCliente";

    $sql_query = $conexao->query($sql_code);
    header("Location: ../../../clientes.php");

} else {
    header("Location: ../../../index.php");
}