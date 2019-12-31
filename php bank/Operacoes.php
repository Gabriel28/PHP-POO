<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$debConta = new Conta(new Titular(new CPF("132.987.126-69"), "TAYSON"));
$gabConta = new Conta(new Titular(new CPF("123.123.433-98"), "SEIYA"));

$gabConta -> depositar(3000);

echo $gabConta-> recuperaNomeTitular() . PHP_EOL;
echo $gabConta-> recuperaCpfTitular() . PHP_EOL;

$gabConta -> transfere(2000, $debConta);

echo $debConta-> informaSaldo();


