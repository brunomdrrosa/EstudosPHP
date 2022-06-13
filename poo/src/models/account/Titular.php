<?php

namespace Alura\Banco\models\account;

use Alura\Banco\models\Autenticavel;
use Alura\Banco\models\Pessoa;
use Alura\Banco\models\CPF;
use Alura\Banco\models\Endereco;

class Titular extends Pessoa implements Autenticavel {

    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco) {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getEndereco(): Endereco {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool {
        return $senha === 'abcd';
    }
}