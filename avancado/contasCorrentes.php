<?php

$conta1 = [
    'titular' => 'Bruno',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'João',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Pedro',
    'saldo' => 500
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}