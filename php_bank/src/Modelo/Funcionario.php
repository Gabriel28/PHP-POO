<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
    private string $cargo; 
    private float $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
    
    //Recupera o nome do funcionário
    public function recuperaCargo(): string
    {
        return $this->cargo;
    }
    
    //altera o nome do funcionario
    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        
    }
    
    //Recupera o salario do funcionário
    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    //calcula bonificações de funcionários.
    public function calculaBonificacao(): float
    {
        if($this->cargo === 'Gerente'){
            return $this->salario * 2;
        }
        return $this->salario * 0.03;
    }
}