<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta("123-456-789-00", "Bruno Machado");

$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarSaldo() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;

$segundaConta = new Conta("987-654-321-00", "Fulano");

echo Conta::getNumeroContas();