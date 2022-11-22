<!DOCTYPE html>
<html lang="pt-br">

<head>

<?php require "html/head.php" ?>

</head>
	
	<body>
		<?php include "html/header.php"; 
		require_once "src/conexao.php";

		$lista = [];
		$sql_code = "SELECT * FROM cliente";
		$sql_query = $conexao ->query($sql_code);


		if($sql_query->num_rows > 0){
			$lista = $sql_query->fetch_all(MYSQLI_ASSOC);
			// var_dump($lista);
		}

		if(!isset($_SESSION)){
			session_start();
			}

			$id = isset($_SESSION["id"]) ? $_SESSION["id"] : 0;
			$nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : 0;

			// echo "ID: $id - Cliente: $nome";

		?>
		<main>
		
			<h1>Clientes</h1>
			<h3>Lista de cadastrados</h3>
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th>ID </th>
						<th>NOME </th>
						<th>NASCIMENTO </th>
						<th>ORGÃO </th>
						<th>IDENTIDADE </th>
						<th>CPF </th>
						<th>ESTADO CIVIL </th>
						<th>SEXO </th>
						<th>EMAIL </th>
						<th>ATIVO </th>
						<th>AÇÃO </th>
					</tr>
					<?php
						foreach($lista as $cliente): ?>
					<tr>
					
						<td><?=$cliente["idcliente"]; ?></td>
						<td><?=$cliente["nome"]; ?></td>
						<td><?=$cliente["data_nascimento"]; ?></td>
						<!-- date('d-m-Y') echo date('d/m/Y', strtotime($variavel)) -->
						<td><?=$cliente["orgao"]; ?></td>
						<td><?=$cliente["rg"]; ?></td>
						<td><?=$cliente["cpf"]; ?></td>
						<td><?=$cliente["estado_civil"]; ?></td>
						<td><?=$cliente["sexo"]; ?></td>
						<td><?=$cliente["email"]; ?></td>
						<td><?=$cliente["ativo"]; ?></td> 
						<td>
						<a href="edicaoCliente.php?id=<?=$cliente["idcliente"]; ?>">[EDITAR]</a>
						<!-- <?php
							if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador"){ ?>
							
							<a href="excluirCliente.php?id=<?=$cliente['idcliente']; ?>"[EXCLUIR] </a>

						<?php } ?> -->

							<!-- <?php
							if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador"){ 
							$idc = $cliente['idcliente'];
							echo "<a href='excluirCliente.php?id=$idc'>[EXCLUIR] </a>";
								
						 	} 
						 ?> -->
						 <?php if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador"){?>

						<a href="excluirCliente.php?id=<?=$cliente['idcliente']; ?>">[EXCLUIR]</a>

						<?php } 
						
						?>
						</td>
						<?php endforeach?>
					</tr>
				</table>
			</div>
		</main>
		
		<?php include "html/footer.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>