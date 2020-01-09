<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('São Paulo', 'São paulo', 'R. Aldeia da Folha', '1123');
$Tsubasa = new Titular(new CPF('123.456.789-10'), 'Oliver Atom', $endereco);
$conta1 = new Conta($Tsubasa);
$conta1->depositar(5500);
$conta1->sacar(350);

echo $conta1->recuperaNomeTitular() . PHP_EOL;
echo $conta1->recuperaCpfTitular() . PHP_EOL;
echo $conta1->informaSaldo() . PHP_EOL;

$conta2 = new Titular(new CPF('698.549.548-10'), 'conta2', $endereco);
$segundaConta = new Conta($conta2);
var_dump($segundaConta);

$novoEndereco = new Endereco('São Carlos', 'Centro', 'R. Centro', '1D32');
$conta4 = new Conta(new Titular(new CPF('123.750.789-01'), 'Seiya', $novoEndereco));
unset($segundaConta);
echo Conta::infoNumContas();
