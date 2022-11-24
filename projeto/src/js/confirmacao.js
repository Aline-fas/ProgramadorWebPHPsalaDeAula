function confirmarApagar(id){
    var confirmar = confirm("Tem certeza que deseja excluir o registro de id: " +id + " selecionado?");

    if(confirmar){
        console.log("Confirmou apagar!");
        location.href= "src/controler/cliente_bd/excluirCliente.php?id=" + id;
    }else{
        console.log("CANCELADO");
    }
}