<?php

require_once 'autoload.php';

use Alura\Banco\models\CPF;
use Alura\Banco\models\employees\Desenvolvedor;

$desenvolvedor = new Desenvolvedor('Bruno', new CPF('123.456.789-10'), 2000);
echo $desenvolvedor->nome;