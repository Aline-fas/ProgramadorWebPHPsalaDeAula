<!DOCTYPE html>
<html lang="pt-br">

<head>

<?php require "html/head.php" ?>

</head>
	
	<body>
		<?php 
		require_once "src/conexao.php";
		require_once "src/protect.php";
		
		if(!isset($_SESSION["tipo"])){
			header("Location: nao_permitido.php");
		}
		
		include "html/header.php"; 

		$id = isset($_SESSION["id"]) ? $_SESSION["id"] : 0;
		$nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : "";
		$tipo = isset($_SESSION['tipo']) ? $_SESSION['tipo'] : "";

		$lista = [];
		$sql_code = "SELECT * FROM cliente";
		$sql_query = $conexao ->query($sql_code);


		if($sql_query->num_rows > 0){
			$lista = $sql_query->fetch_all(MYSQLI_ASSOC);
			// var_dump($lista);
		}



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
						<a href="edicaoCliente.php?id=<?=$cliente["idcliente"]; ?>">
							<!-- [EDITAR] -->
						<i class= "bi bi-pencil-square" style ="font-size: 2rem;"></i>
						</a>
						 
						<?php if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador"){?>

						<a href="#" onclick="confirmarApagar(<?=$cliente['idcliente'];?>)"><i class= 'bi bi-trash' style ='font-size: 2rem; color:red;'></i></a>

						<!-- <a href="src/controler/cliente_bd/excluirCliente.php?id=<?=$cliente['idcliente'];?>" data-bs-toggle="modal" data-bs-target="#excluir_modal"><i class= 'bi bi-trash' style ='font-size: 2rem; color:red;'></i></a>
					
						
						<div class="modal fade" id="excluir_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h1 class="modal-title fs-5" id="staticBackdropLabel">Excluir</h1>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<form action="src/controler/cliente_bd/excluirCliente.php?id=<?=$cliente["idcliente"]; ?>" method="post" >
										<div class="modal-body">
											<h2 style= "Text-align: center">Deseja realmente excluir este cliente? </h2>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
											<button type="submit" class="btn btn-danger">Excluir</button>
										</div>
									</form>
								</div>
							</div>
						</div>	 -->


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
		<script src= "src/js/confirmacao.js"></script>
</body>

</html>