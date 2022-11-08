<?php
//  ORIENTADO A OBJETOS

class Estoque { 
    //O que eu tenho

    private int $idEstoque;
    private int $idProduto;
    private int $qtd;
    private string $registro;
    private string $data;
    private string $valor;

    //Metodo construtor
    public function __construtor(int $idEstoque, int $idProduto, int $qtd,string $registro,string $data,string $valor){
        $this->idEstoque = $idEstoque;
        $this->idProduto = $idProduto;
        $this->qtd = $qtd;
        $this->registro = $registro;
        $this->data = $data;
        $this->valor = $valor;
    }
    //O que eu faço: Metodos
    // private function validaNome(string $nome){
    //     if (strlen($nome) < 5){
    //         echo "Nome precisa ter pelo menos 5 caracteres.";
    //     }else{
    //         $this->nome = $nome;
    //     }
    // }
    //Metodos acessorios Getters e Setters
    public function getIdEstoque(): int{
        return $this ->idEstoque;
    }
    public function setIdEstoque(int $idEstoque) : void {
        $this->idEstoque = $idEstoque;
    }
    public function getIdProduto(): int{
        return $this ->idProduto;
    }
    public function setIdProduto(int $idProduto) : void {
        $this->idProduto = $idProduto;
    }
    public function getQtd(): int{
        return $this ->qtd;
    }
    public function setQtd(int $qtd) : void {
        $this->qtd = $qtd;
    }

    public function getRegistro(): string
    {
        return $this->registro;
    }

    public function setRegistro(string $registro): void
    {
        $this->registro = $registro;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function setData(string $data): void
    {

        $this->data = $data;
    }

    public function getValor(): string
    {
        return $this->valor;
    }

    public function setValor(string $valor): void
    {
        $this->valor = $valor;
    }
}
