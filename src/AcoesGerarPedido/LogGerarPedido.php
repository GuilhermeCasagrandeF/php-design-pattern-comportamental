<?php

namespace Alura\DesignPattern\AcoesGerarPedido;

use Alura\DesignPattern\Pedido;

class LogGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerando log do pedido";
    }
}