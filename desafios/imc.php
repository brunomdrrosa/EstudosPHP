<?php

$peso = readline("Informe o seu peso: ");
$altura = readline("Informe a sua altura: ");
$imc = $peso / ($altura * $altura);

echo "O seu IMC é: " . $imc . PHP_EOL;

if ($imc < 18.5) {
    echo "Baixo peso";
} else if ($imc >= 18.5 && $imc <= 24.99) {
    echo "Peso normal";
} else if ($imc >= 25 && $imc <= 29.99) {
    echo "Peso normal";
} else {
    echo "Obesidade";
}