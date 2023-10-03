<?php

namespace Alura\DesignPattern\AcoesGerarPedido;

use Alura\DesignPattern\Pedido;

class CriarPedidoNoBanco implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Salavando pedido no banco de dados";
    }
}