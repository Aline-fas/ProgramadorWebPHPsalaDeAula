<!DOCTYPE html>
<html lang="pt-br">

<head>

<?php require "html/head.php" ?>

</head>
	
	<body>
		<?php include "html/header.php" ?>
		<main>
        <?php

            echo '<!DOCTYPE html>';
            echo '<html lang="pt-br">';
            echo '<head>';
            echo '   <meta http-equiv="refresh" content="5; url=index.php">';
            echo '</head>';
            echo '<body>';
            echo '<div class="alert alert-danger" role="alert">
                <a style="text-decoration: none; float: right;" href="index.php" class="alert-link">x</a>
                <h3 style="text-align: center;">Você não pode acessar essa página sem esta logado!</h3>
            </div>';
            echo '</body>';
            echo '</html>';
            // echo "<br><h2 style='text-align: center;'>Você não pode acessar essa página sem esta logado!</h2>";

        ?>
       
<br/>
<br/>
<a href="index.php" class="btn btn-link" style="text-align: center;">
    <i class="bi bi-reply" style="font-size: 2rem;"></i>
</a>
<?php die(); ?>

		</main>
		
		<?php include "html/footer.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>