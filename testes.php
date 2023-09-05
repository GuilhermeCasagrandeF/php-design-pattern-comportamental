<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadordeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Orcamento;

require_once 'vendor/autoload.php';

//$calculadora = new CalculadordeImpostos();
//$orcamento = new Orcamento();
//
//$orcamento->valor = 100;
//
//echo $calculadora->calcula($orcamento, new Icms());

$calculadoraDescontos = new CalculadoraDeDescontos();
$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;

echo $calculadoraDescontos->calculaDescontos($orcamento);
