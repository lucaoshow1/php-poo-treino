<?php

use Php\Banco\Modelo\Conta\{Conta, ContaPoupanca, ContaCorrente, Titular};
use Php\Banco\Modelo\{CPF, Endereco};


require_once 'autolad.php';

$conta = new \Php\Banco\Modelo\Conta\ContaCorrente(
            new Titular(
                new CPF('123.456.123-10'),
                    'Lucas Gomes Rocha',
                        new \Php\Banco\Modelo\Endereco
                        ( 'Nova Iguaçu', 'Da Luz', 'Coronel', '3667')
            )
        );
$conta->transfere();
$conta->deposita(300);
$conta->saca(100);
echo $conta->recuperaSaldo();