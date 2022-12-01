<?php

class Contatos {
    private $idContato;
    private $idCliente;
    private $tipo;
    private $descricao;
    private $obs;
    

    public function __construct(int $idContato, int $idCliente, string $tipo, string $descricao, string $obs){
        
        $this->idContato = $idContato;
        $this->idCliente = $idCliente;
        $this->tipo = $tipo;
        $this->descricao = $descricao ;
        $this->obs = $obs;
        
    }
    
    private function validaNumero(string $descricao){
        if(strlen($descricao)<10){
            echo "Preencha um telefone válido (DDD)XXXXX-XXXX!";
        }else{
            $this->descricao = $descricao;
        }
    }

    //Métodos acessores de Getters e Setters
    
    public function getIdContato(): int{
        return $this->idContato;
    }
    public function setIdContato(int $idContato): void{
        $this->idContato = $idContato;
    }
    public function getIdCliente(): int
    {
        return $this->idCliente;
    }

    public function setIdCliente(string $idCliente): void
    {
        $this->idCliente = $idCliente;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {

        $this->verificaNumero($descricao);
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