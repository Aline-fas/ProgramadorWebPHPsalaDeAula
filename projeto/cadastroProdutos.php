<!DOCTYPE html>
<html lang="pt-br">

<head>

	<?php 
		require "html/head.php";
	?>

	<script>
		function selecao() {

			if (f.tipo.value == "HARDWARE") {
				document.getElementById("perid").value = "";
				document.getElementById("divHar").style.display = 'block';
				document.getElementById("harid").disabled = false;
				document.getElementById("perid").disabled = true;
				document.getElementById("divPer").style.display = 'none';
			} else {
				document.getElementById("harid").value = "";
				document.getElementById("divHar").style.display = 'none';
				document.getElementById("harid").disabled = true;
				document.getElementById("perid").disabled = false;
				document.getElementById("divPer").style.display = 'block';
			}
}
	</script>
</head>
	
	<body>
		<?php 
			include "html/header.php";

			require_once "src/conexao.php";

			$nome = isset($_POST["nome"])? $_POST["nome"] : "";
			$tipo = isset($_POST["tipo"])? $_POST["tipo"] : "";
			$categoria = isset($_POST["categoria"])? $_POST["categoria"] : "";
			$fabricante = isset($_POST["fabricante"])? $_POST["fabricante"] : "";
			$descricao = isset($_POST["descricao"])? $_POST["descricao"] : "";
			$ativo = isset($_POST["ativo"])? $_POST["ativo"] : true;
			
			

			if(isset($_FILES['foto'])){
				// var_dump($_FILES['foto']);
				$foto = $_FILES['foto'];
				if ($foto['size']>2097152){
					die("Arquivo muito grande! Maximo: 2MB");
				}
				$pasta = "img/produtos/";
				$nomeOriginal = $foto['name'];
				$nomeDaFoto = uniqid(); // texto aleatorio
				$extensao = strtolower(pathinfo($nomeOriginal, PATHINFO_EXTENSION));

				if($extensao!= "jpg" && $extensao != "png"){
					die("Tipo de arquivo não aceito");
				}

				$caminho = $pasta . $nomeDaFoto . "." . $extensao;
				$deu_certo = move_uploaded_file($foto['tmp_name'], $caminho);

				if ($deu_certo){
					$sql_code = "INSERT INTO produtos VALUES (NULL, '$nome', '$tipo', '$categoria', '$fabricante','$descricao','$caminho', true)";
					$sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " .  $conexao->error . "<br>" . var_dump($conexao->error));

					if($sql_query){
						echo "Gravou";
					}else{
						echo "Não gravou";
					}
					echo "<p>Arquivo enviado com sucesso! Para acessá-lo clique aqui:
					<a target = '_blank' href = '$pasta$nomeDaFoto.$extensao'>Foto</a></p>";

				}else{
					echo "<p>Falha ao enviar o arquivo!</p>";
				}
			}

		?>
		<main>
		<div class="container-fluid">
			<h3>Cadastro de Produtos</h3>
			<form enctype="multipart/form-data" class="row g-3 container-fluid" action="" name="f" method="post">

				<div class="col-md-6 col-sm-12">
					<label for="nome_id" class="form-label">Nome produto</label>
					<input type="text" class="form-control" id="nome_id" name="nome" value="" required>
				</div>
				<div class="col-md-3 col-sm-12">
					<label for="tipoid" class="form-label">Tipo</label>
					<select class="form-select" id="tipoid" name="tipo" onchange="selecao()" required>
						<option selected disabled value="">Selecione</option>
						<option value="HARDWARE">HARDWARE</option>
						<option value="PERIFÉRICOS">PERIFÉRICOS</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-12" id="divHar">
					<label for="harid" class="form-label">Categoria</label>
					<select class="form-select" id="harid" name="categoria" required>
						<option selected disabled value="">Selecione</option>
						<option value="PROCESSADOR">PROCESSADOR</option>
						<option value="PLACA MÃE">PLACA MÃE</option>
						<option value="MEMÓRIA">MEMÓRIA</option>
						<option value="HD">HD</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-12" id="divPer" style="display: none">
					<label for="perid" class="form-label">Categoria</label>
					<select class="form-select" id="perid" name="categoria" required>
						<option selected disabled value="">Selecione</option>
						<option value="MONITOR">MONITOR</option>
						<option value="GABINETE">GABINETE</option>
						<option value="MOUSE">MOUSE</option>
						<option value="TECLADO">TECLADO</option>
						<option value="IMPRESSORA">IMPRESSORA</option>
						<option value="FONE">FONE</option>
						<option value="CAIXA DE SOM">CAIXA DE SOM</option>
					</select>
				</div>
				<div class="col-md-6 col-sm-12">
					<label for="fabid" class="form-label">Fabricante</label>
					<input type="text" class="form-control" id="fabidid" name="fabricante" value="" required>
				</div>
				<div class="col-md-6 col-sm-12">
					<label for="or_id" class="form-label">Foto</label>
					<input type="file" class="form-control" id="or_id" name="foto" value="" required>
				</div>
				<div class="col-md-12 col-sm-12">
					<label for="desc_id" class="form-label">Descrição</label>
					<textarea class="form-control" id="desc_id" name="descricao" rows="4" cols="50" value="" required></textarea>
				</div>
				<div class="col-12">
					<button class="btn btn-primary" type="submit" id="btn-off" disabled style="display: none">Cadastrar</button>
					<button class="btn btn-primary" type="submit" id="btn-on">Cadastrar</button>
				</div>
			</form>
		</div>
		</main>
		
		<?php include "html/footer.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>