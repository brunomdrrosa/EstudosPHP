<?php

use Alura\Banco\models\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Petrópolis',
    'bairro qualquer',
    'Minha rua',
    '71b'
);
$outroEndereco = new Endereco(
    'Rio',
    'Centro',
    'Uma rua aí',
    '50'
);

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;

echo $umEndereco->cidade . PHP_EOL;
echo $umEndereco->bairro . PHP_EOL;
echo $umEndereco->rua . PHP_EOL;
echo $umEndereco->numero . PHP_EOL;
exit();