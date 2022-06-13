<?php

namespace Alura\Banco\models\employees;

use Alura\Banco\models\Autenticavel;

class Diretor extends Funcionario implements Autenticavel {
    public function calculaBonificacao(): float {
        return $this->getSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool {
        return $senha === "1234";
    }
}