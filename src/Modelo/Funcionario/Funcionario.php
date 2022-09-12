<?php

namespace Php\Banco\Modelo\Funcionario;

use Php\Banco\Modelo\CPF;
use Php\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{

    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);

        $this->salario = $salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function recebeAumento(float $valorAumento):void
    {
        if ($valorAumento < 0){
            echo "Opção Invalida!";
        }
        $this->salario += $valorAumento;
    }
    
    public function calculaBonificacao():float
    {

        return $this->salario*0.1;
    }
}
