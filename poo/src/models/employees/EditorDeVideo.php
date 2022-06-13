<?php

namespace Alura\Banco\models\employees;

class EditorDeVideo extends Funcionario {

    public function calculaBonificacao(): float {
        return 600;
    }
}