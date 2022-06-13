<?php

namespace Alura\Banco\services;

use Alura\Banco\models\Autenticavel;

class Autenticador {
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Usuário logado no sistema";
        } else {
            echo "Senha incorreta!";
        }
    }
}