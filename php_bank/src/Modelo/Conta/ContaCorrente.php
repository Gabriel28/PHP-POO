<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    public function percentunalTarifa(): float
    {
       return 0.11;
    }

    //Realiza uma transferência entre contas passando o valor e conta como parâmetro **APENAS PARA CONTA CORRENTE**. 
    public function transfere(float $valorATransfeir, Conta $contaDestino): void
    {
        if($valorATransfeir > $this->saldo){
            echo "Saldo indisponível";
            return;
        }
            $this->sacar($valorATransfeir);
            $contaDestino->depositar($valorATransfeir);
    }
}