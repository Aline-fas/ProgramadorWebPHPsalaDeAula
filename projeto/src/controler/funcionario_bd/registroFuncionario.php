<?php 
        include "../../../html/header.php";
        require_once "../../src/conexao.php";
        require_once "../../src/protect.php";
        
		// require_once "../../src/model/Funcionario.php";

		$nome = isset($_POST['nome'])? $_POST['nome']: "";
		$dataNascimento = isset($_POST['nascimento'])? $_POST['nascimento']:"";
		$cpf = isset($_POST['cpf'])? $_POST['cpf']: "";
		$estado_civil = isset($_POST['estado_civil'])? $_POST['estado_civil']: "";
		$tipo = isset($_POST['tipo'])? $_POST['tipo']: "";
		$celular = isset($_POST['celular'])? $_POST['celular']: "";
		$email = isset($_POST['email'])? $_POST['email']: "";
		$senha = isset($_POST['senha'])? password_hash($_POST['senha'], PASSWORD_DEFAULT): "";
		$ativo = isset($_POST['ativo'])? $_POST['ativo']: true;

		if(isset($_POST['nome']) && isset($_POST['senha2'])){
			// $funcionario = new Funcionario(
                // $idCliente,
                // $nome, 
                // $dataNascimento,
                // $orgao,
                // $rg,
                // $cpf,
                // $estado_civil,
                // $sexo,
                // $email,
                // $senha,
                // $ativo
			// );
			$sql_code = "INSERT INTO funcionario  VALUES (NULL, '$nome', '$dataNascimento','$cpf', '$estado_civil','$tipo','$celular', '$email', '$senha', true)";

			$sql_query = $conexao -> query($sql_code);
			if ($sql_query){
				$sql_code = "SELECT idFuncionario, nome FROM  funcionario WHERE cpf = '$cpf'";
				$sql_query = $conexao -> query ($sql_code);
                
                $funcionario = $sql_query-> fetch_assoc();
                
                $id = $funcionario['idfuncionario'];
                $nome = $funcionario['nome'];
                
                header("Location: ../../../cadastroFuncionario.php?gravado=$id");
                die ("Gravado");
			} else {
				header("Location: ../../../cadastroFuncionario.php?gravado=0");
			}
        }
        header("Location: ../../../cadastroFuncionario.php");
		?>