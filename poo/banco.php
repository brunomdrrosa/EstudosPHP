<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$bruno = new Titular(new CPF("123.456.789-00"), "Bruno Machado");

$primeiraConta = new Conta($bruno);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarSaldo() . PHP_EOL;
echo $primeiraConta->getCpf() . PHP_EOL;
echo $primeiraConta->getTitular() . PHP_EOL;

$fulano = new Titular(new CPF("987.654.321-00"), "Fulano");
$segundaConta = new Conta($fulano);

echo Conta::getNumeroContas();