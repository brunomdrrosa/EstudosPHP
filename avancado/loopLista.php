<?php

$idadeLista = [19, 21, 20, 22, 18];

$idadeLista[] = 23;

for ($i = 0; $i < count($idadeLista); $i++) {
    echo $idadeLista[$i] . PHP_EOL;
}