<?php

require_once 'php_bank/src/Conta.php';
require_once 'php_bank/src/Titular.php';
require_once 'php_bank/src/CPF.php';

$debConta = new Conta(new Titular(new CPF("132.987.126-69"), "TAYSON", "Fuentes, 123. Col"));
$gabConta = new Conta(new Titular(new CPF("123.123.433-98"), "SEIYA", "Avellaneda"));

$gabConta -> depositar(3000);

echo $gabConta-> recuperaNomeTitular() . PHP_EOL;
echo $gabConta-> recuperaCpfTitular() . PHP_EOL;


$gabConta -> transfere(2000, $debConta);

echo $debConta-> informaSaldo() . PHP_EOL;
echo $debConta-> recuperaEndTitular() . PHP_EOL;

var_dump($debConta);
