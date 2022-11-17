<?php
//  ORIENTADO A OBJETOS

class Funcionario { 
    //O que eu tenho

    private int $idFuncionario;
    private string $nome;
    private string $dataNascimento;
    private string $cpf;
    private string $estadoCivil;
    private string $tipo;
    private string $celular;
    private string $email;
    private string $senha;
    private bool $ativo;

    //Metodo construtor
    public function __construtor(int $idFuncionario,string $nome,string $dataNascimento,string $cpf,string $estadoCivil,string $sexo, string $tipo, string $celular, string $email,string $senha,bool $ativo){
        $this->nome = $nome;
        $this->idFuncionario =  $idFuncionario;
        $this->dataNascimento = $dataNascimento;
        $this->cpf = $cpf;
        $this->estadoCivil = $estadoCivil;
        $this->sexo = $sexo;
        $this->tipo = $tipo;
        $this->celular = $celular;
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
    public function getIdFuncionario(): int{
        return $this ->idFuncionario;
    }
    public function setIdFuncionario(int $idFuncionario) : void {
        $this->idFuncionario = $idFuncionario;
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

    public function getTipo(): string
    {
        return $this->tipo; 
    }

    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }

    public function getCelular(): string
    {
        return $this->celular;
    }

    public function setCelular(string $celular): void
    {
        $this->celular = $celular;
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