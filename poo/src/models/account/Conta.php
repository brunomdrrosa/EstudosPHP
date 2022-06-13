<?php

namespace Alura\banco\models\account;

abstract class Conta {

    private Titular $titular;
    protected float $saldo;
    private static int $numeroContas = 0;

    public function __construct(Titular $titular) {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroContas++;
    }

    public function __destruct() {
        self::$numeroContas--;
    }

    public function sacar(float $valorASacar): void {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorADepositar): void {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function recuperarSaldo(): float {
        return $this->saldo;
    }

    public static function getNumeroContas(): int {
        return self::$numeroContas;
    }

    public function getTitular(): string {
        return $this->titular->getNome();
    }

    public function getCpf(): string {
        return $this->titular->getCpf();
    }

    abstract protected function percentualTarifa(): float;

}