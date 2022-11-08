<?php
    require_once "src/protect.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

<?php require "html/head.php" ?>

</head>
	
	<body>
		<?php include "html/header.php" ?>

		<main>

        <?php
            $idcliente = $_SESSION['id'];
            $nomeCliente = $_SESSION['nome'];

            echo "ID: $idcliente - Cliente: $nomeCliente";
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
            <input type="text" class="form-control" id="id_cliente" name="idcliente" value="" hidden>
            
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
                <select class="form-select" id="tipo_id_con" name="tipo" required>
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
                <input type="text" class="form-control" id="obs_id" name="numero" value="" aria-describedby="inputGroupPrepend2" required>
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
                
		</main>
		
		<?php include "html/footer.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>