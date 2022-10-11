<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Senac - Curso de PHP</title>
</head>
<body>
    <div>
        <h1>While</h1>
        <p style="text-align: center;">
        Criando dinamicamente caixas textos.
        </p>
       <form action="exemploWhile2R.php" method="get">    
        <?php 
        $n = 1;
        while($n <= 5){
            echo "<label for='id$n' class='form-label'>Label $n</label>
            <input type='number' class='form-control' name='v$n' id='id$n'>
            <br>";
            $n++;
        }
        ?>
            <input type="submit" value="Enviar">
        </form>
        <br>
        <a href="exemploWhhil2.php">
        <i class="bi bi-reply" style="font-size: 2rem; color: cornflowerblue;"></i> 
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>