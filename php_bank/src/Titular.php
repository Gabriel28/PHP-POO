<?php

class Titular
{
    private CPF $cpf;
    private string $nome;
    private string $endereco;

    public function __construct(CPF $cpf, string $nome, string $endereco)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    //Realiza a validação do nome
    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    //Recupera o CPF do usuário
    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    //Recupera o nome do usuário
    public function recuperaNome(): string
    {
        return $this->nome;
    }

    //Retorna o endereço do usuário
    public function recuperaEnd(): string
    {
        return $this->endereco;
    }

}