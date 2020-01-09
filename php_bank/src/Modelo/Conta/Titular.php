<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->validaNomeTitular($nome);
        $this->endereco = $endereco;
    }

    //Retorna o endereço do usuário
    public function recuperaEnd(): Endereco
    {
        return $this->endereco;
    }

}