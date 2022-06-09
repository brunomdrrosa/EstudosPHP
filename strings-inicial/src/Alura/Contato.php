<?php

namespace App\Alura;

class Contato {

    private $email;
    private $endereco;
    private $cep;

    public function __construct(string $email, string $endereco, string $cep, string $telefone) {
        $this->email = $email;

        if ($this->validaEmail($email) !== false) {
            $this->validaEmail($email);
        } else {
            $this->validaEmail("Email inválido");
        }

        if ($this->validaTelefone($telefone)) {
            $this->setTelefone($telefone);
        } else {
            $this->setTelefone("Telefone inválido");
        }

        $this->endereco = $endereco;
        $this->cep = $cep;
    }

    public function getUsuario(): string  {
        $posicaoArroba = strpos($this->email, "@");

        if ($posicaoArroba === false) {
            return "Usuário inválido";
        }

        return substr($this->email, 0, $posicaoArroba);
    }

    private function validaEmail(string $email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function getEmail(): string  {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getEnderecoCep(): string {
        $enderecoCep = [$this->endereco, $this->cep];
        return implode(" - ", $enderecoCep);
    }

    public function setEndereco(string $endereco): Contato {
        $this->endereco = $endereco;
        return $this;
    }

    public function getCep(): string {
        return $this->cep;
    }

    public function setCep(string $cep): Contato {
        $this->cep = $cep;
        return $this;
    }

    public function getTelefone(): string {
        return $this->telefone;
    }

    public function setTelefone(string $telefone): void {
        $this->telefone = $telefone;
    }

    private function validaTelefone(string $telefone): int {
        return preg_match('/^[0-9]{4}-[0-9]{4}$/', $telefone, $encontrados);
    }
}