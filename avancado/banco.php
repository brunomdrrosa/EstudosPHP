<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Bruno',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Pedro',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'João',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 1500);

unset($contasCorrentes['123.456.789-11']);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem("$cpf - {$conta['titular']} - R$ {$conta['saldo']}");
}