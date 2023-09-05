<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\DescontoMaisDeCincoItens;
use Alura\DesignPattern\Descontos\DescontoMaisDeQuinhentosReais;
use Alura\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDescontos = new DescontoMaisDeCincoItens(new DescontoMaisDeQuinhentosReais(new SemDesconto()));

        return $cadeiaDescontos->calculaDesconto($orcamento);
    }
}