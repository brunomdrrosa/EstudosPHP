<?php

namespace Alura\Banco\models\account;

class ContaPoupanca extends Conta {

    protected function percentualTarifa(): float {
        return 0.03;
    }

}