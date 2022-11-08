<?php
//  ORIENTADO A OBJETOS

class Cliente { 
    //O que eu tenho

    private int $idCliente;
    private string $nome;
    private string $dataNascimento;
    private string $orgao;
    private string $rg;
    private string $cpf;
    private string $estadoCivil;
    private string $sexo;
    private string $email;
    private string $senha;
    private bool $ativo;

    //Metodo construtor
    public function __construtor(int $idCliente,string $nome,string $dataNascimento,string $orgao, string $rg,string $cpf,string $estadoCivil,string $sexo,string $email,string $senha,bool $ativo){
        $this->nome = $nome;
        $this->idCliente =  $idCliente;
        $this->dataNascimento = $dataNascimento;
        $this->orgao = $orgao;
        $this->rg = $rg;
        $this->cpf = $cpf;
        $this->estadoCivil = $estadoCivil;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->senha = $senha;
        $this->ativo = $ativo;
    }
    //O que eu faço: Metodos
    private function validaNome(string $nome){
        if (strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres.";
        }else{
            $this->nome = $nome;
        }
    }
    //Metodos acessorios Getters e Setters
    public function getIdCliente(): int{
        return $this ->idCliente;
    }
    public function setIdCliente(int $idCliente) : void {
        $this->idCliente = $idCliente;
    }
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->validaNome($nome);
    }

    public function getDataNascimento(): string
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento(string $dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function getOrgao(): string
    {
        return $this->orgao;
    }

    public function setOrgao(string $orgao): void
    {
        $this->orgao = $orgao;
    }

    public function getRg(): string
    {
        return $this->rg;
    }

    public function setRg(string $rg): void
    {
        $this->rg = $rg;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void
    {

        $this->cpf = $cpf;
    }

    public function getEestadoCivil(): string
    {
        return $this->estadoCivil;
    }

    public function setEestadoCivil(string $estadoCivil): void
    {
        $this->estadoCivil = $estadoCivil;
    }

    public function getSexo(): string
    {
        return $this->sexo;
    }

    public function setSexo(string $sexo): void
    {
        $this->sexo = $sexo;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

    public function getAtivo(): string
    {
        return $this->ativo;
    }

    public function setAtivo(bool $ativo): void
    {
        $this->ativo = $ativo;
    }
}