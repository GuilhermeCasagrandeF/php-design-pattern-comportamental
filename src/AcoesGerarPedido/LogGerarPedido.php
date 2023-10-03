<?php

namespace Alura\DesignPattern\AcoesGerarPedido;

use Alura\DesignPattern\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerando log do pedido";
    }
}