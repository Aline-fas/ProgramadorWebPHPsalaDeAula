<?php

class Endereco {
    private $idEndereco;
    private $idCliente;
    private $tipo;
    private $logradouro;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $estado;
    private $cep;

    public function __construct(int $idEndereco, int $idCliente, string $tipo, string $logradouro, string $numero, string $complemento, string $bairro, string $cidade, string $estado, string $cep){
        
        $this->idEndereco = $idEndereco;
        $this->idCliente = $idCliente;
        $this->tipo = $tipo;
        $this->logradouro = $logradouro ;
        $this->numero = $numero;
        $this->complemento = $complemento ;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
    }
    
    private function validaLogradouro(string $logradouro){
        if(strlen($nome)<5){
            echo "Nome precisa ter pelo menos 5 caracteres!";
        }else{
            $this->logradouro = $logradouro;
        }
    }

    //Métodos acessores de Getters e Setters
    
    public function getIdEndereco(): int{
        return $this->idEndereco;
    }
    public function setIdEndereco(int $idEndereco): void{
        $this->idEndereco = $idEndereco;
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

    public function getLogradouro(): string
    {
        return $this->logradouro;
    }

    public function setLogradouro(string $logradouro): void
    {

        $this->verificaLogradouro($logradouro);
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): void
    {
        $this->numero = $numero;
    }

    public function getComplemento(): string
    {
        return $this->complemento;
    }

    public function setComplemento(string $complemento): void
    {
        $this->complemento = $complemento;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function setBairro(string $bairro): void
    {
        $this->bairro = $bairro;
    }
    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function setCidade(string $cidade): void
    {
        $this->cidade = $cidade;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): void
    {
        $this->estado = $estado;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function setCep(string $cep): void
    {
        $this->cep = $cep;
    }
}