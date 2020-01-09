<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;

$conta1 = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'), 'Tsubasa', new Endereco('Shizuoka', 'Province', 'JP', '123')
    )
);

$conta2 = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'), 'Naruto', new Endereco('Aldeia da folha', 'Konoha', 'JP', '654')
    )
);

$conta1->depositar(3500);
$conta1->sacar(1200);

$conta1->transfere(775, $conta2);

echo $conta1->informaSaldo().PHP_EOL;
echo $conta2->informaSaldo().PHP_EOL;

