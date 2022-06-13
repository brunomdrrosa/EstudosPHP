<?php

use Alura\Banco\models\CPF;
use Alura\Banco\models\employees\Diretor;
use Alura\Banco\services\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Diretor(
    'João da Silva',
    new CPF('123.456.789-10'),
    10000
);

$autenticador->tentaLogin($diretor, '1234');