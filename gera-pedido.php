<?php
require_once "vendor/autoload.php";

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$orcamento = new Orcamento();
$orcamento->quantidadeItens = $numeroDeItens;
$orcamento->valor = $valorOrcamento;

$pedido = new Pedido();
$pedido->dataFinalizacao = new DateTime();
$pedido->nomeCliente = $nomeCliente;
$pedido->orcamento = $orcamento;

echo "Cria pedido no BD ". PHP_EOL;
echo "Envia email para o cliente ". PHP_EOL;
