<?php

$contasCorrentes = [
    "123.456.789-10" => [
        'titular' => 'Bruno',
        'saldo' => 1000
    ],
    "123.456.789-11" => [
        'titular' => 'João',
        'saldo' => 10000
    ],
    "123.456.789-12" => [
        'titular' => 'Pedro',
        'saldo' => 500
    ]
];

$contasCorrentes["123.456.789-13"] = [
    'titular' => "Thiago",
    'saldo' => 1500,
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}