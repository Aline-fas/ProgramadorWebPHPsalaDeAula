<?php

if(isset($_GET['adicionar'])){
    //vamos adicionar ao carrinho
    $idItem = (int) $_GET['adicionar'];
    if($estoque['idproduto'] == $id){// Marretado **Refatora
        // echo "O produto existe!";
        if(isset($_SESSION['carrinho'][$idItem])){
            $_SESSION['carrinho'][$idItem]['qtd']++;
        }else{
            $_SESSION['carrinho'][$idItem] = array(
                'idProduto' => $idItem, 
                'produto' => $objEstoque->getProduto()->getNome(), 
                'valor' => $objEstoque->getValorVenda(), 
                'qtd' => 1,
                'obj' => serialize($objEstoque) );
        }

        echo "<script>alert('O item foi adicionado ao carrinho.');</script>";
        echo "<script> window.location.href='maisDetalhes.php?id=$id'; </script>";

    } else {
        die('Você não pode adicionar um item que não existe.');
    }
}
// ---------------------------------------------------------------------------------

// if(isset($_SESSION['carrinho'])){
//     foreach($_SESSION['carrinho'] as $key => $value){
//         echo "<br>";
//         echo "Produto: " . $value['produto'];
//         echo "<br>";
//         echo "Key: " . $key;
//         echo "<br>";
//         echo "QTD: " . $value['qtd'];
//         echo "<br>";
//         echo "Valor: " . $value['valor'];
//         echo "<br>";
//         echo "Valor x QTD: " . number_format($value['valor'] * $value['qtd'], 2, ',', '.');
//         echo "<br>";
//         echo "OBJ: " . unserialize($value['obj'])->getProduto()->getNome() ;
//         echo "<br><hr>";
//     }
// }

// ---------------------------------------------------------------------------------