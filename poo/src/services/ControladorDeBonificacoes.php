<?php

namespace Alura\Banco\services;

use Alura\banco\models\employees\Funcionario;

class ControladorDeBonificacoes {

    private int $totalBonificacoes = 0;

    public function adicionaBonificacao(Funcionario $funcionario) {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function getTotalBonificacoes(): int {
        return $this->totalBonificacoes;
    }


}