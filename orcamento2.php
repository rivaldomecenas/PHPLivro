<?php 
require_once 'classes/Orcamento.php';
require_once 'classes/OrcavelInterface.php';
require_once 'classes/Produto.php';
require_once 'classes/Servico.php';

$o = new Orcamento;
$o->adiciona( new Produto('Maquina de Café', 10, 299), 1 );
$o->adiciona( new Produto('Barbeador', 10, 170), 1 );
$o->adiciona( new Produto('Barra de Chocolate', 10, 7), 3);

$o->adiciona( new Servico('Corte de grama', 20), 1);
$o->adiciona( new Servico('Corte de Barba', 20), 1);
$o->adiciona( new Servico('Limpeza de apto', 50), 1);

print $o->calculaTotal();