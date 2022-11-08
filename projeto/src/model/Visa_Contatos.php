<?php
//  ORIENTADO A OBJETOS

class Contatos { 
    //O que eu tenho

    private int $idContatos;
    private int $idCliente;
    private string $tipo;
    private string $descricao;
    private string $obs;
    //Metodo construtor
    public function __construtor(int $idContatos,int $idCliente,string $tipo,string $descricao,string $obs){
        $this->idContatos =  $idContatos;
        $this->idCliente =  $idCliente;
        $this->tipo = $tipo;
        $this->descricao = $descricao;
        $this->obs = $obs;
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
    public function getIdContatos(): int{
        return $this ->idContatos;
    }
    public function setIdContatos(int $idContatos) : void {
        $this->idContatos = $idContatos;
    }
    public function getIdCliente(): int{
        return $this ->idCliente;
    }
    public function setIdCliente(int $idCliente) : void {
        $this->idCliente = $idCliente;
    }
    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): void
    {
        $this-> tipo = $tipo;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getObs(): string
    {
        return $this->obs;
    }

    public function setObs(string $obs): void
    {

        $this->obs = $obs;
    }
}