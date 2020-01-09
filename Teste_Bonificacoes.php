<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControleBonificacoes;
use Alura\Banco\Modelo\{CPF, Funcionario};

$func1 = new Funcionario(
    'Gabriel', new CPF('123.456.789-85'), 'Dev', 4600);

$func2 = new Funcionario(
    'Joana', new CPF('123.456.489-79'), 'Gerente', 7600);

$controlador = new ControleBonificacoes();
$controlador2 = new ControleBonificacoes();
$controlador->adicionaBonificacaoDe($func1);
$controlador2->adicionaBonificacaoDe($func2);

echo $controlador->recuperaTotal().PHP_EOL;
echo $controlador2->recuperaTotal().PHP_EOL;
