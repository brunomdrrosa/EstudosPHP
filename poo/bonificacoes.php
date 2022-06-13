<?php

require_once 'autoload.php';

use Alura\Banco\services\ControladorDeBonificacoes;
use Alura\Banco\models\CPF;
use Alura\Banco\models\employees\{EditorDeVideo, Gerente, Diretor, Desenvolvedor};

$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Patricia',
    new CPF('987.654.321-10'),
    3000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new CPF('987.654.321-10'),
    5000
);

$umEditor = new EditorDeVideo(
    'Ana Paula',
    new CPF('987.654.321-10'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($umFuncionario);
$controlador->adicionaBonificacao($umaFuncionaria);
$controlador->adicionaBonificacao($umDiretor);
$controlador->adicionaBonificacao($umEditor);

echo $controlador->getTotalBonificacoes();