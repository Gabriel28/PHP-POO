<?php

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