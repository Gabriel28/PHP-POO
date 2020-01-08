<?php

require_once 'php_bank/src/Conta.php';
require_once 'php_bank/src/Endereco.php';
require_once 'php_bank/src/Titular.php';
require_once 'php_bank/src/CPF.php';

$endereco = new Endereco ('São Paulo', 'Suzano', 'Rua forte', '71');
$endereco2 = new Endereco ('São Carlos', 'Centro', 'Rua presidente', '174');
$debConta = new Conta(new Titular(new CPF("132.987.126-69"), "TAYSON", $endereco2));
$gabConta = new Conta(new Titular(new CPF("123.123.433-98"), "SEIYA", $endereco));

$gabConta -> depositar(3000);

echo $gabConta-> recuperaNomeTitular() . PHP_EOL;
echo $gabConta-> recuperaCpfTitular() . PHP_EOL;


$gabConta -> transfere(2000, $debConta);

echo $debConta-> informaSaldo() . PHP_EOL;

var_dump($debConta);
