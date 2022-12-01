<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php 
    require "html/head.php"; 
    require_once "src/protect.php";
    
    ?>
<script>
    
    </script>
</head>
<!--  -->
<body>
    
    <?php include "html/header.php" ?>
    <main>
        
        <?php 
            $idCliente = $_SESSION['id'];
            $nomeCliente = $_SESSION['nome'];
            echo "<h5>Complete seu cadastro, $nomeCliente!</h5>"; 
            
            require_once "src/conexao.php";
            require_once "src/model/Endereco.php";
            
			$idEndereco = isset($_POST["id"]) ? $_POST["id"] : 0;
			$tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : "";
			$logradouro = isset($_POST["logradouro"]) ? $_POST["logradouro"] : "";
			$numero = isset($_POST["numero"]) ? $_POST["numero"] : "";
			$complemento = isset($_POST["complemento"]) ? $_POST["complemento"] : "";
            
			$bairro = isset($_POST["bairro"]) ? $_POST["bairro"] : "";
			$cidade = isset($_POST["cidade"]) ? $_POST["cidade"] : "";
			$estado = isset($_POST["estado"]) ? $_POST["estado"] : "";
			$cep = isset($_POST["cep"]) ? $_POST["cep"] : "";
            
			if(isset($_POST["logradouro"]) && isset($_POST["cep"])){
                $endereco = new Endereco(
                    $idEndereco,
					$idCliente,
					$tipo,
					$logradouro,
					$numero,
					$complemento,
					$bairro,
					$cidade,
					$estado,
					$cep
				);
				
				$sql_code = "INSERT INTO endereco VALUES (NULL, '$idCliente', '$tipo', '$logradouro', '$numero', '$complemento','$bairro', '$cidade', '$estado', '$cep')";
				$sql_query = $conexao->query($sql_code);
			}
            
            // ----------------------- TELEFONE -----------------------------------------------
            
            require_once "src/model/Contatos.php";
            
            $idContato = isset($_POST["id"]) ? $_POST["id"] : 0;
			$tipocon = isset($_POST["tipocon"]) ? $_POST["tipocon"] : "";
			$descricao = isset($_POST["descricao"]) ? $_POST["descricao"] : "";
			$obs = isset($_POST["obs"]) ? $_POST["obs"] : "";		
		

			if(isset($_POST["descricao"]) && isset($_POST["tipocon"])){
				$contato = new Contatos(
					$idContato,
					$idCliente,
					$tipocon,
					$descricao,
					$obs				
				);
				
				$sql_code2 = "INSERT INTO contatos VALUES (NULL, '$idCliente', '$tipocon', '$descricao', '$obs')";
				$sql_query2 = $conexao->query($sql_code2);
			}
            ?>

            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h5>Endereço</h5>
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <div class="container-fluid">
                        <form class="row g-3 container-fluid" name="f" action="" method="post">
                            <input type="text" class="form-control" id="id_clientec" name="idcliente" value="" hidden>
                            
                            <div class="col-md-3 col-sm-12">
                                <label for="tipo_id" class="form-label">Tipo</label>
                                <select class="form-select" id="tipo_id" name="tipo" required>
                                    <option selected disabled value="">Selecione</option>
                                    <option value="Residencial">Residencial</option>
                                    <option value="Comercial">Comercial</option>
                                </select>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <label for="rua" class="form-label">Logradouro</label>
                                <input type="text" class="form-control" id="rua" name="logradouro" value="" required>
                            </div>
                            <div class="col-md-1 col-sm-12">
                                <label for="numero_id" class="form-label">Número</label>
                                <input type="number" class="form-control" id="numero_id" name="numero" value="" aria-describedby="inputGroupPrepend2" required>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="comp_id" class="form-label">Complemento</label>
                                <input type="text" class="form-control" id="comp_id" name="complemento" value="" required>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="bairro" class="form-label">Bairro</label>
                                <input type="text" class="form-control" id="bairro" name="bairro" value="" required>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" required>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="estado" class="form-label">Estado</label>
                                <input type="text" class="form-control" id="estado" name="estado" value="" required>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="cep" class="form-label">CEP</label>
                                <input type="text" class="form-control" id="cep" name="cep"  
                                onblur="pesquisacep(this.value);" maxlength="9" required>
                            </div>
                                        
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit" id="btn-off" disabled style="display: none">Cadastrar</button>
                                <button class="btn btn-primary" type="submit" id="btn-on" >Cadastrar</button>
                            </div>
                        </form>
                    </div>
                       
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h5>Contatos</h5>
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <div class="container-fluid">
                        <form class="row g-3 container-fluid" name="c" action="" method="post">
                            <input type="text" class="form-control" id="id_cliente" name="idcliente" value="" hidden>
                            
                            <div class="col-md-3 col-sm-12">
                                <label for="tipo_id_con" class="form-label">Tipo</label>
                                <select class="form-select" id="tipo_id_con" name="tipocon" required>
                                    <option selected disabled value="">Selecione</option>
                                    <option value="Celular">Celular</option>
                                    <option value="Comercial">Comercial</option>
                                    <option value="Fixo">Fixo</option>
                                    <option value="Recado">Recado</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <label for="desc_id" class="form-label">Número</label>
                                <input type="text" class="form-control" id="desc_id" name="descricao" value="" required>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <label for="obs_id" class="form-label">Observação</label>
                                <input type="text" class="form-control" id="obs_id" name="obs" value="" aria-describedby="inputGroupPrepend2" required>
                            </div>
                                        
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit" id="btn-off2" disabled style="display: none">Cadastrar</button>
                                <button class="btn btn-primary" type="submit" id="btn-on2" >Cadastrar</button>
                            </div>
                        </form>
                    </div>
                        
                    </div>
                    </div>
                </div>

            </div>
		</main>
		<?php include "html/rodape.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>