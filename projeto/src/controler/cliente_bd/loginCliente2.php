<?php
    require_once "../../conexao.php";

    if(isset($_POST["email"]) || isset($_POST["senha"])){
            
            $email = $conexao->real_escape_string($_POST["email"]);
            $senha = $conexao->real_escape_string($_POST["senha"]);
            $lembrar = isset($_POST['lembrar]']) ? $_POST['lembrar'] : false ; 

            $sql_code = "select *  from cliente where email = '$email'";
            $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);
            
            //Quantidade de linhas retornado;
            $qtd = $sql_query->num_rows; //Atributo num_rows = número de linhas
            if($qtd == 1){
                
                $cliente = $sql_query->fetch_assoc();
 
                if(password_verify($senha,$cliente['senha'])){
                    if(!isset($_SESSION)){
                    session_start();
                    }
                    $_SESSION['id'] = $cliente ['idcliente'];
                    $_SESSION['nome'] = $cliente ['nome'];

                    //criando cookie
                    //+3600 ou 60*60  (1h)
                    //+60*60*24 (24h)
                    //+60*60*24*30 (30dias) ...


                    // strtotime('now');
                    // strtotime('+1 day');
                    var_dump($cliente['email']);    
                    setcookie('cliente', $cliente['nome'], time()+259200, "/");
                    // setcookie('cliente', $cliente ['nome'], strtotime('+1 month'), "/");
                    // setcookie('login', $cliente['email'], strtotime('+1 day'), "/", "", false, true);
                    // var_dump($lembrar);
                    if($lembrar){
                        if (!isset($_COOKIE['login']) || $_COOKIE['login']== $email){
                            setcookie('login', $cliente["email"], strtotime('+1 month'), "/", "", false, true);
                        }
                    }else{
                        setcookie('login', $cliente["email"], time()-259200, "/", "", false, true);
                    }
                    var_dump($cliente['email']);
                    // header("Location: ../../../index.php");
                }else {
                    // header("Location: ../../../nao_permitido.php");
                    echo "Falha ao logar! E-mail ou senha incorretos";
                }
                
            } else {
                echo "Falha ao logar! E-mail ou senha incorretos";
            }

        }
