<?php

namespace Alura\Banco\models\employees;

use Alura\Banco\models\Autenticavel;

class Gerente extends Funcionario implements Autenticavel {
    public function calculaBonificacao(): float {
        return $this->getSalario();
    }

    public function podeAutenticar(string $senha): bool {
        return $senha === '4321';
    }
}