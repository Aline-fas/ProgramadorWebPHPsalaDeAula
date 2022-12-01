<!DOCTYPE html>
<html lang="pt-br">

<head>

	<?php require "html/head.php";
	if(!isset($_SESSION)){
		session_start();
	}
	 ?>

</head>
	
	<body>
		<?php include "html/header.php";
		require_once "src/conexao.php";
		require_once "src/model/Cliente.php";

		if (isset($_SESSION['id'])){
			$id = $_SESSION['id'];
		}

		$sql_code = "SELECT * FROM cliente LEFT JOIN endereco ON idcliente = endereco.id_cliente LEFT JOIN contatos ON idcliente = contatos.id_cliente WHERE idcliente = '$id'";
		$sql_query = $conexao->query($sql_code);
		?>
		
		<main>
		<div class="row row-cols-1 row-cols-md-3 g-4">
			<a href="edicaoCliente.php?id=<?=$id;?>">
				<div class="col">
					<div class="card"> 
						<i class= "bi bi-person-square text-center text-sucess" style ="font-size: 10rem;"></i>';
						<div class="card-body">
							<h5 class="card-title text-center">Dados Pessoais</h5>
						</div>
					</div>	
				</div>
			</a>
			<a href="cadastroClienteComplemento.php?id=<?=$id;?>">
				<div class="col">
					<div class="card">
					<?php
						while ($cliente = $sql_query->fetch_assoc()){

							if($cliente['cep'] == ""){
								echo '<i class= "bi bi-house text-center text-danger" style ="font-size: 10rem;"></i>';
										
							}else{
								echo '<i class= "bi bi-house text-center text-success" style ="font-size: 10rem;"></i>';
								}
						}
					?>
					
						<div class="card-body">
							<h5 class="card-title text-center">Endereço </h5>
						</div>
					</div>	
				</div>
			</a>
			<a href="edicaoCliente.php?id=<?=$id;?>">
				<div class="col">
					<div class="card">
					<?php
						while ($cliente = $sql_query->fetch_assoc()){

							if($cliente['tipo'] == ""){
								echo '<i class= "bi bi-house text-center text-danger" style ="font-size: 10rem;"></i>';
										
							}else{
								echo '<i class= "bi bi-house text-center text-success" style ="font-size: 10rem;"></i>';
								}
						}
					?>
					<i class= "bi bi-telephone text-center text-success" style ="font-size: 10rem;"></i>
						<div class="card-body">
							<h5 class="card-title text-center ">Contato </h5>
						</div>
					</div>	
				</div>
			</a>
			<a href="edicaoCliente.php?id=<?=$id;?>">
				<div class="col">
					<div class="card">
					<i class= "bi bi-table text-center text-success" style ="font-size: 10rem;"></i>
						<div class="card-body">
							<h5 class="card-title text-center">Histórico de compras</h5>
						</div>
					</div>	
				</div>
			</a>
		</div>
		</main>
		
		<?php include "html/footer.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>