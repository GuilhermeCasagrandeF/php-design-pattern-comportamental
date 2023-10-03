<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\AcoesGerarPedido\AcaoAposGerarPedido;
use Alura\DesignPattern\AcoesGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesGerarPedido\LogGerarPedido;

class GerarPedidoHandler
{
    /**
     * @var AcaoAposGerarPedido[]
     */
    private array $acoesAposGerarPedido = [];
    
    public function __construct(/* PedidoRepository, MailService */)
    {
    }

    public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido $acao): void
    {
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }

    }
}
