<?php

namespace Php\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function percentualTarifa():float
        {
            return 0.05;
        }
}