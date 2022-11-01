<?php

echo "Testando as funções die() e exit() em php<br>";
// die("Aplicação interrompida nesse ponto com a função die()!!!!");
// exit("Aplicação interrompida nesse ponto com a função exit()!!!!");

echo "Linha exibida apenas se o script não for interrompido!<br>";

$senha = '123';

echo "Senha criptografada com MD5()<br>" . md5($senha);
echo "<br>Senha criptografada com password_hash():<br>". password_hash($senha, PASSWORD_DEFAULT);
$senhaCrip = '$2y$10$xyg4w1fvCfXJ9csHy2sap.juGv2eCpNHtsqI0SHzv2gNXt8Dr17bK';
if (password_verify($senha, $senhaCrip)){
    echo "<br>Senhas iguais!";
}else {
    echo "<br>Senhas diferentes.";
}
