<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    public function percentunalTarifa(): float
    {
       return 0.11;
    }
}