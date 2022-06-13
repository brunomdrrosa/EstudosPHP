<?php

require_once 'autoload.php';

use Alura\Banco\models\account\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\models\{Endereco, CPF};

//$endereco = new Endereco('Porto Alegre', 'Bairro', 'Rua', '123');
//
//$bruno = new Titular(new CPF("123.456.789-00"), "Bruno Machado", $endereco);
//
//$primeiraConta = new Conta($bruno);
//$primeiraConta->depositar(500);
//$primeiraConta->sacar(300);
//
//echo $primeiraConta->recuperarSaldo() . PHP_EOL;
//echo $primeiraConta->getCpf() . PHP_EOL;
//echo $primeiraConta->getTitular() . PHP_EOL;
//
//$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
//$segundaConta = new Conta($patricia);
//var_dump($segundaConta);
//
//$outroEndereco = new Endereco('A', 'b', 'c', '1D');
//$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
//unset($segundaConta);
//echo Conta::getNumeroContas();

$conta = new ContaCorrente(new Titular(new CPF('123.456.789-00'), 'Teste', new Endereco('', '', '', '')));
echo $conta->recuperarSaldo() . PHP_EOL;
$conta->depositar(500);
echo $conta->recuperarSaldo() . PHP_EOL;
$conta->sacar(300);

echo $conta->recuperarSaldo() . PHP_EOL;
