<?php

namespace Alura\Banco\models;

interface Autenticavel {
    public function podeAutenticar(string $senha): bool;
}