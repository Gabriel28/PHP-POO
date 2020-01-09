<?php

class Funcionario extends Pessoa
{
    private string $cargo; 

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }
    
    //Recupera o nome do funcionário
    public function recuperaCargo(): string
    {
        return $this->cargo;
    }
    
    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        
    }
}