<?php 

class Pessoa
{
    protected string $nome;
    protected CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
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

    //Realiza a validação do nome
    protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }



}
