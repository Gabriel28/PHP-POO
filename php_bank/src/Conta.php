<?php

class Conta
{
    //Definir dados da conta
    private Titular $titular;
    private float $saldo;
    private static $numContas = 0;

    //Defini os dados conta do cliente 
    public function __construct(Titular $titular)
    {
        echo "Criando uma nova conta..." . PHP_EOL;
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numContas++; 
    }

    public function __destruct()
    {
        self::$numContas--;
    }
    
    //Saca valor da conta que está acessando o método.
    public function sacar(float $valorASacar)
    {
        if($valorASacar > $this->saldo){
            echo "Saldo indisponível";
            return;
        }
            $this->saldo -= $valorASacar;
    }

    //Realiza um depósito de uma valor para a conta que está acessando o método. 
    public function depositar (float $depositarValor): void
    {
        if($depositarValor < 0){
            echo "O Valor precisa ser positivo";
            return;
        } 
            $this->saldo += $depositarValor;
    }

    //Realiza uma transferência entre contas passando o valor e conta como parâmetro. 
    public function transfere(float $valorATransfeir, Conta $contaDestino): void
    {
        if($valorATransfeir > $this->saldo){
            echo "Saldo indisponível";
            return;
        }
            $this->sacar($valorATransfeir);
            $contaDestino->depositar($valorATransfeir);
    }

    //Recupera o saldo e apresenta na tela.
    public function informaSaldo(): float
    {
        return $this->saldo;
    }

    //Informa quantas contas já foram criadas.
    public function infoNumContas(): int
    {
        return self::$numContas;
    }

    //Recupera o nome do titular
    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    //Recupera o CPF do titular;
    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCPF();
    }


}