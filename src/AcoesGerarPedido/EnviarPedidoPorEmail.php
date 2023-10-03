<?php

namespace Alura\DesignPattern\AcoesGerarPedido;

use Alura\DesignPattern\Pedido;

class EnviarPedidoPorEmail
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Enviando email de pedido gerado";
    }
}