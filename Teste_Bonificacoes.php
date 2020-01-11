<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControleBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor};

$func1 = new Desenvolvedor(
    'Gabriel', new CPF('123.456.789-85'), 'Dev', 4600);

$func2 = new Gerente(
    'Joana', new CPF('123.456.489-79'), 'Gerente', 7600);

$func3 = new Diretor(
    'Tebora', new CPF('123.123.963-79'), 'Diretora', 10000);

$controlador = new ControleBonificacoes();
$controlador2 = new ControleBonificacoes();
$controlador3 = new ControleBonificacoes();

$controlador->adicionaBonificacaoDe($func1);
$controlador2->adicionaBonificacaoDe($func2);
$controlador3->adicionaBonificacaoDe($func3);

echo $controlador->recuperaTotal().PHP_EOL;
echo $controlador2->recuperaTotal().PHP_EOL;
echo $controlador3->recuperaTotal().PHP_EOL;

$func1->novoNivelJR();

var_dump($func1);