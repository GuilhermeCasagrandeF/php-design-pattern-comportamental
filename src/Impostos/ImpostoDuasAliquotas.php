<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

abstract class ImpostoDuasAliquotas implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        if ($this->deveAplicarTaxaMaxima($orcamento)) {
            return $this->calculaTaxaMaxima($orcamento);
        }

        return $this->calculaTaxaMinima($orcamento);
    }

    /**
     * @param Orcamento $orcamento
     * @return bool
     */
    abstract protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool;

    /**
     * @param Orcamento $orcamento
     * @return float
     */
    abstract protected function calculaTaxaMaxima(Orcamento $orcamento): float;

    /**
     * @param Orcamento $orcamento
     * @return float
     */
    abstract protected function calculaTaxaMinima(Orcamento $orcamento): float;

}