<?php

$numero = readline("Informe um número: ");;

for ($i = 1; $i <= 10; $i++) {
    echo "$numero x $i = " . $numero * $i . PHP_EOL;
}