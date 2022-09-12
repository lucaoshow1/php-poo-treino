<?php

namespace Php\Banco\Service;

use Php\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private $totalDeBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalDeBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal():float
    {
        return $this->totalDeBonificacoes;
    }
}